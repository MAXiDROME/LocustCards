<?php

class LocustCard {

    private $token='';
    private $apiurl='https://locustcards.ru/api/';
    private $debug=FALSE;

    private function get_func_argNames ($funcName) {
        $ReflectionMethod=new \ReflectionMethod(__CLASS__, $funcName);
        $params=$ReflectionMethod->getParameters();
        $paramNames=array_map(function ($item) {
            return $item->name;
        }, $params);

        return $paramNames;
    }

    public function __construct ($token, $debug=FALSE) {
        $this->token=$token;
        $this->debug=$debug;
    }

    function get_cards_by_phone ($phone) {

        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;
    }

    function get_card_by_number ($card) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function add_operation ($card, $value, $date='', $comment='') {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function request_code ($card) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function request_key ($code, $key) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }


    function register_customer ($phone, $card='', $percent='', $email='', $lastname='', $firstname='', $patronymic='', $sex='', $comment='') {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function register_card ($customer_id, $phone, $card='', $percent='') {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function get_customer_by_phone ($phone) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function get_customer_by_email ($email) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function edit_customer ($customer_id, $email='', $lastname='', $firstname='', $patronymic='', $sex='', $comment='') {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function get_operations_by_card ($card, $date_start='', $date_end='') {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function edit_card ($card, $phone, $percent='', $customer_id='') {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function delete_card ($card) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function is_card_active ($card) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function activate_email ($customer_id) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }

    function delete_operation ($operation_id) {
        $params=$this->get_func_argNames(__FUNCTION__);
        $query="?" . __FUNCTION__ . "&token=" . $this->token;
        foreach ($params as $param) $query.="&" . $param . "=" . urlencode(${$param});

        $answer=json_decode(file_get_contents($this->apiurl . $query), TRUE);
        if ($this->debug) return array("query"=>$this->apiurl . $query, "answer"=>$answer);

        return $answer;

    }


}
