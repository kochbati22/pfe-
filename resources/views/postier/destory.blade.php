<!-- Bouton "Supprimer" -->
<button class="btn btn-danger btn-xs delete-btn" data-postier-id="{{ $postier->id }}">
    <i class="fa fa-trash"></i> Supprimer
</button>

<!-- Modèle de confirmation de suppression (masqué par défaut) -->
<div id="delete-modal-{{ $postier->id }}" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Confirmation de suppression</h4>
            </div>
            <div class="modal-body">
                <p>Êtes-vous sûr de vouloir supprimer ce postier?</p>
            </div>
            <div class="modal-footer">
                <form id="delete-form-{{ $postier->id }}" action="{{ route('postier.destroy', $postier->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Annuler</button>
                </form>
            </div>
        </div>
    </div>
</div>