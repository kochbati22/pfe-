<?php

namespace App\Console\Commands;




use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Cache; // Importez la classe Cache depuis le namespace approprié


class UpdateConge extends Command
{
     
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'conge:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Mise à jour automatique du solde de congé chaque mois';


    /**
     * Execute the console command.
     * 
    
     *
     * @return int
     */
    public function handle()
{
    // Récupérer le dernier temps d'exécution de la commande depuis le cache
    $lastExecutionTime = Cache::get('last_conge_update_execution_time');

    // Vérifier si le dernier temps d'exécution n'existe pas
    if (!$lastExecutionTime) {
        // S'il n'existe pas, enregistrer le temps actuel comme dernier temps d'exécution
        Cache::put('last_conge_update_execution_time', now());
        $lastExecutionTime = now();
    }

    // Calculer la différence de minutes entre le temps actuel et le dernier temps d'exécution
    $currentTime = now();
    $minutesSinceLastExecution = $currentTime->diffInMinutes($lastExecutionTime);

    // Vérifier si une heure complète s'est écoulée depuis la dernière exécution
    if ($minutesSinceLastExecution >= 60) {
        // Mettre à jour le solde de congé pour tous les postiers
        $postiers = User::where('role', 'postier')->get();
        foreach ($postiers as $postier) {
            $postier->soldeconge += 1.5; // Ajouter 1.5 au solde de congé pour chaque heure écoulée
            $postier->save();
        }

        // Mettre à jour le dernier temps d'exécution dans le cache avec l'heure actuelle
        Cache::put('last_conge_update_execution_time', now());

        // Afficher un message de succès
        $this->info('Le solde de congé a été mis à jour pour tous les postiers avec succès!');
    } else {
        // Calculer le temps restant avant la prochaine mise à jour
        $remainingMinutes = 60 - $minutesSinceLastExecution;

        // Afficher un message indiquant qu'il n'est pas encore temps de mettre à jour le solde de congé
        $this->info('Il n\'est pas encore temps de mettre à jour le solde de congé. Prochaine mise à jour dans ' . $remainingMinutes . ' minutes.');
    }

    // Retourner un code de succès pour indiquer que la commande s'est exécutée avec succès
    return Command::SUCCESS;
}
}
