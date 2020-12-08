<?php
namespace dimensoes;

/**
 * Model da entidade produto
 * @author Vinicius
 */
class Produto{
   /**
    * codigo do produto
    * @var int
    */
   public $codigo;
   /**
    * Nome do produto
    * @var string
    */
   public $nome;
   /**
    * Descricao do produto
    * @var string
    */
   public $descricao;
   /**
    * preco do produto
    * @var double
    */
   public $preco;
   /**
    * unidade_medida do produto
    * @var string
    */
   public $unidade_medida;


   public $data_ini;
   /**
    * data inicial do produto
    * @var date
    */
   public $data_fim;
   /**
    * unidade_medida do produto
    * @var date
    */
   
   /**
    * Carrega os atributos da classe Prospect
    * @param $codigo Codigo do produto
    * @param $nome Nome do produto
    * @param $descricao Descricao do produto
    * @param $preco Preço do produto
    * @param $unidade_medida Unidade de Medida do produto
    * @param $data_ini Data inicial
    * @param $data_fim Data Final
    *@return Void
    */

   public function setproduto($codigo, $nome, $descricao, $preco ,$unidade_medida){
      $this->codigo = $codigo;
      $this->nome = $nome;
      $this->descricao = $descricao;
      $this->preco = $preco;
      $this->unidade_medida = $unidade_medida;
      $this->data_ini = $date_ini;
      $this->data_fim = $date_fim;
   }
}
?>