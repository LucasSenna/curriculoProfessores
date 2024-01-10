document.addEventListener('DOMContentLoaded', function() {
    var cpfInput = document.getElementById('cpf');

    cpfInput.addEventListener('input', function() {
        var cpf = cpfInput.value;
        cpf = cpf.replace(/\D/g, ''); // Remove caracteres não numéricos

        if (cpf.length === 11) {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, '$1.$2.$3-$4');
        } else {
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})/, '$1.$2.$3');
        }

        cpfInput.value = cpf;
    });
});

document.addEventListener('DOMContentLoaded', function() {
    var telefoneInput = document.getElementById('telefone');

    telefoneInput.addEventListener('input', function() {
        var telefone = telefoneInput.value;
        telefone = telefone.replace(/\D/g, ''); // Remove caracteres não numéricos

        if (telefone.length === 11) {
            telefone = telefone.replace(/(\d{2})(\d{5})(\d{4})/, '($1) $2-$3');
        } else if (telefone.length === 10) {
            telefone = telefone.replace(/(\d{2})(\d{4})(\d{4})/, '($1) $2-$3');
        } else {
            // Você pode adicionar lógica para tratar números de telefone com formatos diferentes
        }

        telefoneInput.value = telefone;
    });
});
