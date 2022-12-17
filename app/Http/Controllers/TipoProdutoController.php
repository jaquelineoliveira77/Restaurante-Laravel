<?php

namespace App\Http\Controllers;
use App\Models\TipoProduto as ModelsTipoProduto;
use Illuminate\Http\Request;
use App\Models\TipoProduto;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;


class TipoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     * Mostra uma lista com todos os recursos
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            //echo"TipoProdutoController usado e chamado o método index";
            //select * from tipo_produto e armazena o resultado no objeto $tipoProdutos
            //esse objeto é um vetor de models
            //$tipoProdutos = TipoProduto::all();
            //vai mostrar o que tem armazenado nele
            $tipoProdutos = DB::select('SELECT * FROM TIPO_PRODUTOS');
            //print_r($tipoProdutos);


        } catch (\Throwable $th) {

            return view("TipoProduto/index")->with("tipoProdutos", [])->with("message", [$th->getMessage(), "danger"]);
        }
        return view("TipoProduto/index")->with("tipoProdutos", $tipoProdutos);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexMessage($message)
    {
        try {

            $tipoProdutos = DB::select('SELECT * FROM TIPO_PRODUTOS');
        } catch (\Throwable $th) {
            //print_r($tipoProdutos);
            //dd($th);
            return view("TipoProduto/index")->with("tipoProdutos", [])->with("message", [$th->getMessage(), "danger"]);
        }

        return view("TipoProduto/index")->with("tipoProdutos", $tipoProdutos)->with("message", $message);
    }


    /**
     * Show the form for creating a new resource.
     * Mostrar um formulário para criação de um novo recurso
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            $tipoprodutos = DB::select('SELECT * FROM TIPO_PRODUTOS');
            
        } catch (\Throwable $th) {
            //retorno quando dá erro
            return $this->indexMessage([$th->getMessage(), 'danger']);
        }
        //retorno quando dá certo
        return view("TipoProduto/create")->with("tipoProdutos", $tipoprodutos);
    }

    /**
     * Store a newly created resource in storage.
     * Armazena um recurso recém criado na base de dados
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //echo $request->descricao;
            $tipoProdutos = new ModelsTipoProduto();
            //objeto-> atributoDoBanco = requisição->'campo name que veio pelo post';
            $tipoProdutos->descricao = $request->descricao;
            $tipoProdutos->save();
        } catch (\Throwable $th) {
            //depois que salva retorna uma view
            // return \Redirect::route('produto.index');

            //depois que salva retorna uma view
            //return view('tipoproduto.create');

            //retorno quando dá erro
            return $this->indexMessage([$th->getMessage(), 'danger']);
        }
        //retorno para quando dá certo
        return $this->indexMessage(['TipoProduto cadastrado com sucesso', 'sucess']);
    }

    /**
     * Display the specified resource.
     *Mostra um recurso específico
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $tipoProdutos = DB::select("SELECT tipo_produtos.id as id,
                                        tipo_produtos.descricao, 
                                        tipo_produtos.updated_at,
                                        tipo_produtos.created_at
                    FROM produtos
                    JOIN tipo_produtos ON produtos.tipo_produtos_id = tipo_produtos.id
                    WHERE tipo_produtos.id = ?", [$id]);

            //O DB SELECT sempre retorna um array [obj], [obj, obj, ...] ou []
            //$produtos = DB::select("SELECT * FROM Produtos WHERE Produtos.id = ?", [$id]);

            //$produto = Produto::find($id); //retorna um objeto ou null
            //dd($produto);

            //Mando carregar a view de Produto, criando dentro dela um objeto chamado produto com o conteúdo de $produto que está no controlador
            if (count($tipoProdutos) > 0) {
                return view("tipoProduto/show")->with("tipoProduto", $tipoProdutos[0]);
                //Todo: Implementar mensagens de erro
                //echo"Tipo Produto não encontrado";
                //retorno quando falha no IF (quando não encontra o ID  pelo select)
            }
            return $this->indexMessage(['O TipoProduto não foi encontrado', 'warning']);
        } catch (\Throwable $th) {
            //retorno quando dá erro
            return $this->indexMessage([$th->getMessage(), 'danger']);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {     
         //Procuro o tipoproduto que eu quero editar
            $tipoProdutos = tipoProduto::find($id); //retorna um obj ou null
            //pergunto se o obj é válido ou null
            if (isset($tipoProdutos)) {
                //array com todos os Produtos
                return view("tipoproduto/edit")
                ->with("tipoProdutos", $tipoProdutos);

            try {
            //retorno quando falha no IF (quando não encontra o ID  pelo select)
            return $this->indexMessage(["O TipoProduto não foi encontrado", "warning"]);
             } catch (\Throwable $th) {
            //retorno quando dá erro
            return $this->indexMessage([$th->getMessage(), "danger"]);
            //#TODO implementar tratamento de exceptions
            // echo"Tipo de produto não encontrado";
             }
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     */
    public function update(Request $request, $id)
    {
        try {
            //echo"Tipo $request->Tipo_Produtos_id";
            $tipoProduto = tipoProduto::find($id); //retorna um obj ou null
            //dentro dessa variável eu já tenho o produto que eu quero atualizar

            //Pergunto se o obj é válido ou null(se ele existe)
            if (isset($tipoProduto)) {
                $tipoProduto->descricao = $request->descricao;
                $tipoProduto->update();
                //Recarregar a view index
                // return $this->index();
                return $this->indexMessage(["TipoProduto atualizado com sucesso", "success"]);
            }
            //#TODO implementar tratamento de exceptions
            // echo "Tipo de produto não encontrado";

            //Return quando não encontra o produto para edição
            return $this->indexMessage(["O TipoProduto não foi encontrado", "warning"]);
        } catch (\Throwable $th) {
            //retorno quando dá erro
            return $this->indexMessage([$th->getMessage(), "danger"]);
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $tipoProduto = tipoProduto::find($id); //Retorna o objeto encontrado ou null, caso não encontrado
            //Se o tipoproduto foi encontrado
            if (isset($tipoProduto)) {
                $tipoProduto->delete();
                // return \Redirect::route('tipoproduto.index');
                //return $this->index(); 
            //else{
            // echo "Tipo Produto não encontrado";
            return $this->indexMessage(["TipoProduto removido com sucesso", "sucess"]);
            }
            //Retorno de aviso quando o produto não foi encontrado
            return $this->indexMessage(["O TipoProduto não foi encontrado", "warning"]);
        } catch (\Throwable $th) {
            //retorno quando dá erro
            return $this->indexMessage([$th->getMessage(), "danger"]);
        }
    }
}
