<?php
require_once '../model/venda.php';
require_once 'Controller.php';
class VendasController extends Controller
{
    /**
     * Lista vendas
     */
    public function listar()
    {
        $vendas = Venda::all();
        return $this->view('gradeVendas', ['vendas' => $vendas]);
    }

    public function RelVenda()
    {
        $vendas = Venda::all();
        return $this->view('RelVenda', ['vendas' => $vendas]);
    }
    /**
     * Mostrar formulario para criar uma nova venda
     */
    public function criar()
    {
        $clientes = Venda::findcliente();
        $produtos = Venda::findproduto();
        return $this->view2('formVenda',[['clientes' => $clientes],['produtos' => $produtos]]);
    }
    /**
     * Mostrar formulário para editar um cliente
     */
    public function editar($dados)
    {
        $id      = (int) $dados['id'];
        $produto = Produto::find($id);
        $clientes = Venda::findcliente();
        $produtos = Venda::findproduto();
        return $this->view2('formVenda', [['vendas' => $vendas],['clientes' => $clientes],['produtos' => $produtos]]);
    }
    /**
     * Salvar o cliente submetido pelo formulário
     */
    public function salvar()
    {
        $vendas           = new Venda;
        $vendas->ID     = $this->request->ID;
        $vendas->DESCRICAO = $this->request->DESCRICAO;
        $vendas->VALOR_COMPRA    = $this->request->VALOR_COMPRA;
        $vendas->VALOR_VENDA    = $this->request->VALOR_VENDA;
        $vendas->ESTOQUE    = $this->request->ESTOQUE;
        $vendas->CRITICO    = $this->request->CRITICO;
        //$vendas->FORNECEDORE_ID    = $this->request->FORNECEDORE_ID;
        if ($vendas->save()) {
            return $this->listar();
        }
    }
    /**
     * Atualizar o cliente conforme dados submetidos
     */
    public function atualizar($dados)
    {
        $id                = (int) $dados['id'];
        $vendas           = Produto::find($id);
        $vendas->ID     = $this->request->ID;
        $vendas->DESCRICAO = $this->request->DESCRICAO;
        $vendas->VALOR_COMPRA    = $this->request->VALOR_COMPRA;
        $vendas->VALOR_VENDA    = $this->request->VALOR_VENDA;
        $vendas->ESTOQUE    = $this->request->ESTOQUE;
        $vendas->CRITICO    = $this->request->CRITICO;
        $vendas->FORNECEDORE_ID    = $this->request->FORNECEDORE_ID;
        $vendas->save();
        return $this->listar();
    }
    /**
     * Apagar um cliente conforme o id informado
     */
    public function excluir($dados)
    {
        $id      = (int) $dados['id'];
        $vendas = Venda::destroy($id);
        return $this->listar();
    }
}
