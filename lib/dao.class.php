<?php
class Dao
{
    private $_objDB;
    public $DB;
    public $TABLE;
    public function __construct()
    {
        $this->DB = 'acacia';
        if(!$this->_objDB){
            $this->_objDB = new DB($this->DB);
        }
    }
    public static $arrTypePat = [//类型正则
        'int'=> '/^\d+$/',
        'num'=> '/^\d+(\.\d*)?$/',
        'string'=> '/^.*$/',
        'date'=> '/^\d{4}[-\/]\d{1,2}[-\/]\d{1,2}$/',
    ];

    #过滤数据
    public static function filterColumn($arrData, $arrFilter){
		$arrErr = ['err_col'=> null, 'err_type'=> null];
        foreach($arrFilter as $col=> $filter){
            if(!isset($arrData[$col])){
				$arrErr['err_col'] = $col;
				$arrErr['err_type'] = 'null';	
				return $arrErr;
            }
			$val = $arrData[$col];
			#check null
			$trimVal = trim($val);
			$bool_checkNull = isset($arrFilter[$col]['null']) && $arrFilter[$col]['null'] == false;//需要检查not null
			$bool_colEmpty = empty($trimVal) && ($trimVal !== 0 && $trimVal !== '0');//字段为空
			if($bool_checkNull){
				if($bool_colEmpty){
					$arrErr['err_col'] = $col;
					$arrErr['err_type'] = 'null';
					return $arrErr;
				}
			}
			#check type
			if(isset($arrFilter[$col]['type'])){
				$type = $arrFilter[$col]['type'];
				if($bool_checkNull || (!$bool_checkNull && !$bool_colEmpty)){//not null 或 null但值非空
                    if(!isset(self::$arrTypePat[$type])){
						$arrErr['err_col'] = $col;
						$arrErr['err_type'] = $type;
						return $arrErr;
                    }
                    $res = preg_match(self::$arrTypePat[$type], $val);
                    if(false === $res || 0 == $res){
						$arrErr['err_col'] = $col;
						$arrErr['err_type'] = $type;
						return $arrErr;
                    }

				}
			}
			
        }
        return true;
    }

    public function getListByConds($arrFields, $arrConds, $arrOrder='', $arrLimit=''){

        $fieldText = $this->getSplitText($arrFields);
        $condText = $this->getConds($arrConds);
        $orderText = $this->getSplitText($arrOrder);
        $limitText = $this->getSplitText($arrLimit);

        if(empty($arrFields)){
            $fieldText = "*";
        }
        $whereText = " ";
        if(!empty($condText)){
            $whereText = " where {$condText} ";
        }
        $sql = "select {$fieldText} from {$this->TABLE} {$whereText} order by {$orderText} limit {$limitText};";
        $list = $this->_objDB->getAssocResult($sql);
        return $list;
    }

    public function updateByConds($arrConds, $arrFields){
        $fieldText = $this->getUpdateFieldsText($arrFields);
        $condText = $this->getConds($arrConds);

        $whereText = " ";
        if(!empty($condText)){
            $whereText = " where {$condText} ";
        }
        $sql = "update {$this->TABLE} set {$fieldText} {$whereText} ";
        $res = $this->_objDB->queryRaw($sql);
        return $res;
    }
	public function insert($arrFields){
        $fieldText = $this->getUpdateFieldsText($arrFields);

        $sql = "insert into {$this->TABLE} set {$fieldText}";
        $res = $this->_objDB->queryRaw($sql);
        return $res;
    }

    private function getSplitText($partArr, $spliter=','){
        if(is_array($partArr)){
            $text = implode($spliter, $partArr);
        }else{
            $text = $partArr;
        }
        return $text;
    }
	private function getConds($data){
		if(is_array($data) && !empty($data)){
            foreach($data as $k=> $v){
				if(is_array($v)){
					$k1 = array_keys($v);
					$kk = $k1[0];
					$vv = $v[$kk];
					$subText[] = "(`$kk` = '$vv')";
				}else{
					$subText[] = "($v)";
				}
            }
            $text = implode('and', $subText);
        }else{
            $text = $data;
        }
        return $text;
	}
	private function getUpdateFieldsText($data){
		if(is_array($data) && !empty($data)){
			foreach($data as $k=> $v){
				$subText[] = "`{$k}`='{$v}'";
			}
			$text = implode(',', $subText);
        }else{
            $text = $data;
        }   
        return $text;	
	}
    public function getLastSql(){
        return $this->_objDB->getLastSql();
    }
}
