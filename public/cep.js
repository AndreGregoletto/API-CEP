const baseUrl   = window.location.origin
console.log(baseUrl)
$('#cep').mask('00000-000')

$('#btnCep').click(function () {
    let cep = $('input[name="cep"]').val()

    if (!/^\d{5}-\d{3}$/.test(cep)) {
        alert("Por favor, insira um CEP válido no formato XXXXX-XXX.")
        return;
    }
    
    $('#result, #row').hide()

    $.ajax({
        headers:{
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        , type:'POST'
        , url:`${baseUrl}/api/cepSearch`
        , async:true
        , dataType:'json'
        , data : {
            cep : cep
        }
        , success: function(datas){
            if (!datas || Object.keys(datas).length === 0) {
                alert('Nenhum dado encontrado para o CEP informado.')
                return;
            }
            
            $('#result, #row').show()

            $.each(datas, function(key, value) {
                key = key == 'cep' ? 'cepView' : key
                $(`#${key}`).val(value);
            });

        } , error: function(xhr, status, error) {
            let message = "Erro ao processar a requisição."

            if (xhr.responseJSON && xhr.responseJSON.message) {
                message = xhr.responseJSON.message
            }

            alert(message)
        }
    })

})

