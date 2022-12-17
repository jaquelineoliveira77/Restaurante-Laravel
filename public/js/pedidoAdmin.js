
// Faz interior dessa função ser executado apenas após toda página HTML
// estiver carregada
$(document).ready( function() {
    // busco o elemento select no HTML
    const selectFiltroTipo = $("#id-select-filtro-tipo");
    selectFiltroTipo.on("change", function() {
        updateProdutos();
    });

    function groupBy(arr, property){
        return arr.reduce( function (anterior, atual){
            if(!anterior[atual[property]]){
                anterior[atual[property]] = [];
            }
            anterior[atual[property]].push(atual);
            return anterior;
        }, [] );
    }
    
    function updatePedidos(){
        $.ajax({
            type: "GET",
            url: `/pedido/admin/getpedidos/`,
            data: null,
            dataType: "json",
            success: function(response){
                //console.log(response);
                // IMPLEMENTAR O Método para imprimir os pedidos no local correto
                printPedidos(response.return);

               $(".itemPedido").on("click", function(){
                   updatePedidoProdutos(this.getAttribute("value"));
               });
               //mando atualizar a lista de produtos dentro do pedido com base no primeiro pedido da lista
            //updatePedidoProdutos(response.return[0].id);

            
            },
            error: function(error){
                console.log(error);
            }
        });
    }

    function printPedidos(pedido_id){
        //encontrar onde irá imprimir as informações
        divListPedidos = $("#list-pedidos");
        //Limpar o local que eu quero imprimir
        divListPedidos.html("");

        pedido_id.forEach(element => {
            if(element["status"] ==  "A"){
                corPedido = "list-group-item-action"
            }else if(element["status"] ==  "R"){
                corPedido = "list-group-item-warning"
            }else if(element["status"] ==  "C"){
                corPedido = "list-group-item-danger"
            }else if(element["status"] ==  "E"){
                corPedido = "list-group-item-primary"
            }else if(element["status"] ==  "F"){
                corPedido = "list-group-item-success"
            }
            //Utilizando uma template String do JS ou seja, utilizando craze para abrir e fechar as strings
            divListPedidos.append(`<a value="${element.id}" class="list-group-item list-group-item-action ${corPedido} itemPedido">Pedido ${element.id} </a>`);
        });
    }  

    function updateTipoProdutosDropdown(){
        $.ajax({
            type: "GET",
            url: `/pedido/admin/gettipoprodutos/`,
            data: null,
            dataType: "json",
            success: function(response){
                console.log(response);
                // IMPLEMENTAR O Método para imprimir os pedidos no local correto
                printSelectTipoProdutos(response.return);
                //Pego o primeiro tipo da lista e mando carregar o dropdown de produtos
                //remover comentário quando implementar o exercício 2 do trabalho
               updateProdutosDropdown(response.return[0].id);
               
            },
            error: function(error){
                console.log(error);
            }
        });
    
    }
    function printSelectTipoProdutos(tipoProdutos){
  

        divSelectTipoProdutos = $("#select-tipo-produto");
        divSelectTipoProdutos.html("");
        tipoProdutos.forEach(tipoProduto => {
            //Utilizando uma template String do JS ou seja, utilizando craze para abrir e fechar as strings
            divSelectTipoProdutos.append(`<option value="${tipoProduto.id}">${tipoProduto.descricao}</option>`);
        
        
        });

    }

    function updateProdutosDropdown(tipoSelecionado){
        $.ajax({
            type: "GET",
            url: `/pedido/admin/getprodutos/${tipoSelecionado}`,
            data: null,
            dataType: "json",
            success: function(response){
                //console.log(response);
                // IMPLEMENTAR O Método para imprimir os pedidos no local correto
                printSelectProdutos(response.return);
                 //Pego o primeiro produto da lista e mando carregar o dropdown de tipo
                
            },
            error: function(error){
                console.log(error);
            }
        });
    }

    function printSelectProdutos(produtos){
        //implementar 
        divSelectProdutos = $("#select-produto");
        divSelectProdutos.html("");
        produtos.forEach(produto => {
            //Utilizando uma template String do JS ou seja, utilizando craze para abrir e fechar as strings
            divSelectProdutos.append(`<option value="${produto.id}">${produto.nome}</option>`);
        
        
        });
    }

    function updatePedidoProdutos(idPedido){
        $.ajax({
            type: "GET",
            url: `/pedido/admin/getpedidoprodutos/${idPedido}`,
            data: null,
            dataType: "json",
            success: function(response){
                console.log(response.return);
              //Imprimir todos os produtos dentro de um pedido
                ShowPedidoProdutos(response.return);
                //imprimir o número correto do pedido
                $("#id-h2-pedido").html(`Pedido ${idPedido}`);
                
            },
            error: function(error){
                console.log(error);
            }
        });
    }

    function ShowPedidoProdutos(pedidoProdutos){
        //implementar
        divListaPedidoProdutos= $("#list-produtos");
        divListaPedidoProdutos.html("");

        pedidoProdutos.forEach(item => {
            //Utilizando uma template String do JS ou seja, utilizando craze para abrir e fechar as strings
            divListaPedidoProdutos.append(` 
            <span class="list-group-item"> ${item.descricao} - ${item.nome} - ${item.quantidade}x
                <span class="class-icons-produto-list"> 
                    <i class="fa-solid fa-pencil-square"></i> 
                    <i class="fa-solid fa-trash"></i> 
                </span>
            </span>`);
        
        });
       
    }

      //implementar
      $('#select-tipo-produto').on("change",function(){
        //Pego o atributo value que o elemento selecionado no select
        tipoSelecionado = $('#select-tipo-produto').val();
        updateProdutosDropdown(tipoSelecionado);
    });

   


    // Chama a função inicialmente quando carregar a página
    updatePedidos();
    updateTipoProdutosDropdown();
    //updatePedidoProdutos('1');

    
});
