<?php 
    namespace App\Controller;
    use App\Controller\AppController;
    use Cake\Datasource\ConnectionManager;

    class SearchController extends AppController
    {   
        public function index()
        {
            if (empty($this->request->query['name'])) {
                return;
            }
            $str = $this->request->query['name'];
        	//var_dump(print_r($str,true));
    
        	//入力された検索条件からSQl文を生成
        	$where = [];
            $name = str_replace('　', ' ', $str);
            $keylist = explode(' ', $name);
            while($key = current($keylist)){
                $where[] = "key_text like ? ";
                next( $keylist );
            }
        
            $whereSql = implode(' OR ', $where);
            $sql1 = 'select distinct key_text from keyword k1 where exists (select 1 from keyword_group kg1 where exists	(select 1 from keyword_group kg2 inner join ( ';
            $sql2 = 'select kid from keyword where ' . $whereSql ;
            $sql3 = ') k2 on k2.kid = kg2.kid where kg1.kgid = kg2.kgid) and k1.kid = kg1.kid)';
            $sql = $sql1 . $sql2 . $sql3;
        	//var_dump(print_r($sql,true));
        	
            $keylist = explode(' ', $name);
            $insertArray = [];
        	while($key = current($keylist)){
                $insertArray[] = "%" . $key . "%";
                next( $keylist );
        	}

            $connection = ConnectionManager::get('default');
            $keyword = $connection->execute($sql, $insertArray)->fetchAll('assoc');

        	$result = [];
        	foreach ($keyword as $row) {
        	    $result = (empty($result)? '': $result . ' ') . $row['key_text'];
        	}            
        	//var_dump(print_r($result,true));
            $this->set('userData', $result);
        }    
    }
