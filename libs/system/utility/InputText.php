<?php

/**
 * SweetPHP <br />
 * <p><b>InputText</b></p>
 * <p>Define todos os parâmetros que serão utilizados nos componentes html 
 * instanciados pelo plugin jSweetPHP durante o processamento e reuisições via ajax.</p><br />
 * <p>Este classe é utilizada como herança para classes primárias.</p>
 * @copyright	Copyright (c) 2013 - 2014, Ilines.
 * @package SweetPHP
 * @subpackage System/Utility
 * @author sweetphp
 */
class InputText extends DataParam {

    private $object = "";
    private $value = "";
    private $attributes = "";
    private $dataParam = "";

    /**
     * SweetPHP <br />
     * <p><b>__construct</b></p>
     * <p>Espefifica as principais características do input text.<p><br />
     * @author sweetphp
     * @example $user = new User(); <p>__construct($user, 'name', 'onclick=>'alert(\"Ola\")')</p>
     * @return <input type="text" />  <!-- <input type="text" name="User[name]" onclick="alert('Olá')" /> -->
     */
    public function __construct($object = "", $value = "", $attributes = "", $dataParam = "") {
        $this->object = $object;
        $this->$value = $value;
        $this->attributes = $attributes;
        $this->dataParam = $dataParam;
    }

    /**
     * SweetPHP <br />
     * <p><b>show</b></p>
     * <pImprime o resultado final de todos os parâmetros setados<p><br />
     * @author sweetphp
     * @return <input type="text" /> <p>Conforme mostrado no __construtor</p>
     */
    public function show() {
        $name = "";
        if (!empty($this->object) || $this->object != null) {
            $name = "$this->object";
        }
        if (!empty($this->value) || $this->value != null) {
            $this->value = "value=\"$this->value\"";
        }
        $this->text = "<input type=\"text\" name=\"$name\" " . $this->value;
        $p = $this->toString();
        if (!empty($p)) {
            $this->text .= $p;
        }
        return $this->text . " />";
    }

    public function getModel() {
        return $this->model;
    }

    public function getObject() {
        return $this->object;
    }

    public function getValue() {
        return $this->value;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function getDataParam() {
        $this->dataParam = $this->dataId . $this->dataRequest . $this->dataAction . $this->dataMethod . $this->dataReturn;
        return $this->dataParam;
    }

    public function setModel($model) {
        $this->model = $model;
    }

    public function setObject($object) {
        $this->object = $object;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
    }

    public function setDataParam($dataParam = "") {
        $this->dataParam = $dataParam;
    }

}
