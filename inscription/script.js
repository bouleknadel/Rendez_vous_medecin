document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('registration-form');
    const submitButton = form.querySelector('input[type="submit"]');

    form.addEventListener('submit', function(event) {
        // Désactiver le bouton d'envoi pour éviter les soumissions multiples
        submitButton.disabled = true;

        // Valider le formulaire
        if (!validateForm()) {
            event.preventDefault(); // Empêcher l'envoi du formulaire si la validation échoue
        }
    });

    // Écouter les événements de changement sur les champs du formulaire
    form.addEventListener('input', function(event) {
        const target = event.target;
        if (target.tagName === 'INPUT' || target.tagName === 'SELECT') {
            validateField(target);
        }
    });

    function validateField(field) {
        const fieldValue = field.value.trim();
        const fieldName = field.id;
        let errorMessage = '';

        switch (fieldName) {
            case 'confirmerMotDePasse':
                const passwordField = document.getElementById('motDePasse');
                const password = passwordField.value.trim();
                errorMessage = fieldValue === '' ? 'Veuillez confirmer votre mot de passe.' : fieldValue !== password ? 'Les mots de passe ne correspondent pas.' : '';
                break;

            default:
                errorMessage = fieldValue === '' ? `Veuillez entrer votre ${fieldName}.` : '';
                break;
        }

        // Affichage de l'erreur
        const errorField = document.getElementById(`${fieldName}-error`);
        errorField.textContent = errorMessage;

        // Vérification des champs précédents
        if (fieldValue === '' && !isPreviousFieldFilled(field)) {
            errorMessage = 'Veuillez remplir les champs précédents.';
            errorField.textContent = errorMessage;
        }
    }

    function validateForm() {
        let isValid = true;

        const fields = form.querySelectorAll('input, select');
        let password = '';
        let confirmPassword = '';

        fields.forEach(function(field) {
            validateField(field);
            if (field.id !== 'confirmerMotDePasse' && field.value === '') {
                isValid = false;
            }

            if (field.id === 'motDePasse') {
                password = field.value.trim();
            }

            if (field.id === 'confirmerMotDePasse') {
                confirmPassword = field.value.trim();
                if (confirmPassword !== password) {
                    isValid = false;
                    const errorMessage = 'Les mots de passe ne correspondent pas.';
                    const errorField = document.getElementById(`${field.id}-error`);
                    errorField.textContent = errorMessage;
                }
            }
        });

        return isValid;
    }

    function isPreviousFieldFilled(currentField) {
        const fields = document.querySelectorAll('input, select');
        let previousFieldFound = false;
        for (let field of fields) {
            if (field === currentField) {
                break; // Arrêter la recherche une fois que le champ actuel est atteint
            }
            if (field.value.trim() === '') {
                previousFieldFound = true;
                break;
            }
        }
        return !previousFieldFound;
    }
});