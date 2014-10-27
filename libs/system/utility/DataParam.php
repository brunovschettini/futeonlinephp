<?php

/**
 * SweetPHP <br />
 * <p><b>DataParam</b></p>
 * <p>Cria botões input de maneira organizada e segura.</p><br />
 * @package SweetPHP
 * @subpackage System/Utility
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @author sweetphp
 */
class DataParam {

    public $dataUpdate = "";
    public $dataLoadingText = "";
    public $dataLoadingClass = "";
    public $dataLoading = "";
    public $dataType = "";
    public $dataListener = "";
    public $dataAction = "";
    public $dataRequest = "";
    public $dataReturn = "";
    public $dataMethod = "";
    public $dataId = "";

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataUpdate() {
        return $this->dataUpdate;
    }

    /**
     * SweetPHP <br />
     * <p><b>Data Update (data-update)</b></p>
     * <p>Execulta eventos click / change no complete da requisição ajax. 
     * Ex. Ao clicar no botão 1, dou um click no botão 2, após a requisição ter 
     * sido processada. Simitar ao complete/render/update do primefaces.</p>
     * @author sweetphp 
     * @param string $dataUpdate 
     * @return data-update
     */
    public function setDataUpdate($dataUpdate = "") {
        $this->dataUpdate = " data-update=\"$dataUpdate\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataLoadingText() {
        return $this->dataLoadingText;
    }

    /**
     * SweetPHP <br />
     * <p><b>Data Loading Text (data-loading-text)</b></p>
     * <p>Adiciona um texto ao componente referenciado. 
     * Ex: span :: Aguarde :: /span </ span>:</p>
     * @author sweetphp 
     * @param string $dataLoadingText
     * @return data-loading-text
     */
    public function setDataLoadingText($dataLoadingText = "") {
        $this->dataLoadingText = " data-loading-text=\"$dataLoadingText\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataLoadingClass() {
        return $this->dataLoadingClass;
    }

    /**
     * SweetPHP <br />
     * <p><b>Data Loading Class (data-loading-class)</b></p>
     * <p>Adiciona a nova classe preloader ao componente referenciado.</p>
     * @author sweetphp 
     * @param string $dataLoadingClass 
     * @return data-loading-class 
     */
    public function setDataLoadingClass($dataLoadingClass = "") {
        $this->dataLoadingClass = " data-loading-class=\"$dataLoadingClass\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataLoading() {
        return $this->dataType;
    }

    /**
     * SweetPHP <br />
     * <p><b>Data Loading (data-loading)</b></p>
     * <p>class ou id onde será mostrado um preloader durante a requisição ajax 
     * solicitada. Ex. data-loading=".loadingA" 
     * <span class="loadingA">Aguarde</span></p>
     * @author sweetphp 
     * @param string $dataLoading 
     * @return data-loading 
     */
    public function setDataLoading($dataLoading = "") {
        $this->dataType = " data-loading=\"$dataLoading\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataType() {
        return $this->dataType;
    }

    /**
     * SweetPHP <br />
     * <p>O tipo de dados que você está esperando de volta a partir do servidor. 
     * Se nenhum for especificado, jQuery vai tentar inferir-lo com base no tipo 
     * de MIME da resposta (um tipo de MIME XML trará XML, JSON em 1,4 produzirá 
     * um objeto JavaScript, em 1,4 script irá executar o script, e qualquer outra 
     * coisa será retornado como uma string). Os tipos disponíveis (eo resultado 
     * passado como o primeiro argumento para o seu sucesso de retorno de chamada) 
     * são: (xml, json, script, or html)</p> 
     * <p><b>Data Type (data-type)</b></p>
     * @link  http://api.jquery.com/jQuery.ajax/
     * @author sweetphp 
     * @param string $dataType
     * @return data-type
     */
    public function setDataType($dataType = "") {
        $this->dataType = " data-type=\"$dataType\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataListener() {
        return $this->dataListener;
    }

    /**
     * SweetPHP <br />
     * <p><b>Data Listener (data-listener)</b></p>
     * <p>Faz uma pré requisição antes do processamento atual.</p>
     * @author sweetphp 
     * @param string $dataListener
     * @example {'request':'bean','action':'method/function','parameters':'p1'}
     * @return data-listener
     */
    public function setDataListener($dataListener = "") {
        $this->dataListener = " data-listener=\"$dataListener\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataAction() {
        return $this->dataAction;
    }

    /**
     * SweetPHP <br />
     * <p><b>Data Action (data-action)</b></p>
     * <p>Método, função ou ação da requisição request. 
     * Ex. new LoginBean()->$action(), 
     * LoginBean::$action() ou if($_POST['action'] == 'validar'). 
     * Similar aos métodos java. $_POST/$_REQUEST/$_GET -> $['action']</p>
     * @author sweetphp 
     * @param string $dataAction
     * @return data-action
     */
    public function setDataAction($dataAction = "") {
        $this->dataAction = " data-action=\"$dataAction\" ";
    }

    /**
     * SweetPHP <br />
     * <p><b>Consultar no método set</b></p>
     */
    public function getDataRequest() {}
}