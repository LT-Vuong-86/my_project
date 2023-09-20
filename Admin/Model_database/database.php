<?php
    class database{
        protected $conn = null;
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $dtbase = 'du_an';
        protected $port = '3308';
    //Tạo phương thức kết nối
    public function __construct()
    {
        //connect mysql
        $this->connect();
    }

    //Viết hàm kết nối với cơ sở dữ liệu
    public function connect()
    {
        $this->conn= new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->dtbase,
            $this->port
        );
        if (!$this->conn) {
            echo "Kết nối thất bại";
            exit();
        }
    }
public function get_join($column=array(),$table1,$table2,$condition,$condition1=array())  {
    // var_dump($column);
   
    // $column1=implode(',', $column);
    // echo $column1;
    // die;
    $column1=implode(',', $column);
    $sql ="SELECT $column1 FROM $table1 INNER JOIN $table2 ON $table1.$condition =$table2.$condition";
    if(!empty($condition1)){
        $sql.=" WHERE ";

        foreach ($condition1 as $key => $value){
            $sql.= " $key = '$value' AND";
        }
        $sql = trim($sql, "AND");
    }
    $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
                if ($query){
                    while($row = mysqli_fetch_assoc($query)){
                        $ketqua[] = $row;
                    }
                }
                return $ketqua;
}
        public function get($table, $condition=array()){
            //Lấy dữ liệu sql
            $sql = "SELECT * FROM $table";
            if(!empty($condition)){
                $sql.=" WHERE ";

                foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
                }
                $sql = trim($sql, "AND");
            }
            //Thực thi câu lệnh
            $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
                if ($query){
                    while($row = mysqli_fetch_assoc($query)){
                        $ketqua[] = $row;
                    }
                }
                return $ketqua;
        }
        //Function lấy dữ liệu theo điều kiện
        public function get_like($table, $column, $value,$condition=array()){
            $sql = "SELECT * FROM $table WHERE $column LIKE '%$value%'";
          
            if(!empty($condition)){
                $sql.=" AND ";
                foreach ($condition as $key => $value){
                    $sql.= " $key = '$value' AND";
                }
                $sql = trim($sql, "AND");
                // var_dump($sql);
                // die;
            }
            $query = mysqli_query($this->conn, $sql);
            $ketqua = array();
                if ($query){
                    while($row = mysqli_fetch_assoc($query)){
                        $ketqua[] = $row;
                    }
                }
                return $ketqua;
        }
        
        public function insert($table, $data=array()){
            $keys = array_keys($data);
            $column = implode(",", $keys);
            $value_str ='';
            foreach ($data as $keys => $value){
                $value_str .="'$value',";
            }
            $value_str = trim($value_str, ",");
            $sql = "INSERT INTO $table ($column) VALUES ($value_str)";
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        public function delete($table, $condition=array()){
            $sql = " DELETE FROM $table WHERE ";
            
            foreach ($condition as $key => $value){
                $sql.="$key = '$value' AND";
            }
            $sql = trim($sql, "AND");
            //Thực thi câu lệnh
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }

        public function update($table, $data=array(), $condition=array()){
            $value_str = '';
            foreach ($data as $key => $value){
                $value_str .="$key = '$value',";
            }
            $value_str = trim($value_str, ",");
            $sql = "UPDATE $table SET $value_str WHERE ";

            foreach ($condition as $key => $value){
                $sql.="$key = '$value' AND";
            }
            $sql = trim($sql, 'AND');
            $query = mysqli_query($this->conn, $sql);
            return $query;
        }
        public function uploadfile($uploadedFile)  {   
            $files = array();   
            $errors = array();    
            foreach ($uploadedFile as $key => $values) { 
                foreach ($values as $index => $value) {
                     $files[$index][$key] = $value;
                }
            }
            
            $uploadPath = "../images/sanpham";
            // if (!is_dir($uploadPath)) {
            //  mkdir($uploadPath);
            // }
            
            foreach ($files as $file) {
            // $file = self::validateUploadFile($file, $uploadPath);
            if ($files != false) {
                 move_uploaded_file($file["tmp_name"], $uploadPath .'/'.$file["name"]);
            }else {
                $errors[]="the file".basename($file["name"]). "isn't valid";
            }
            }
            return $errors=($file["name"]);
        }
        public function validateUploadFile($file, $uploadPath) {
            //Kiểm tra xem có vượt quá dung lượng cho phép không?
       
               if ($file['size'] > 20*1024*1024) {
           //max upload is 2 Mb = 2 *
                   return false;
               }
       $validTypes = array("jpg","jpeg","png","bmp","mp4");
       $fileType = substr($file['name'], strrpos($file['name'], ".")+1);
               if (!in_array($fileType, $validTypes)) {
                   return false;
               }
           $num=1;
           $filename= substr($file['name'],0,strrpos($file['name'], "."));
               while (file_exists($uploadPath . '/' .$filename . '.' . $fileType)) {
                   $filename= $filename . "(" .$num .")";
                   $num++;
               }
           $file['name']=$filename . '.' .$fileType;
           return $file;
       }
       function insert_id()
{
  // Lấy kết nối đến cơ sở dữ liệu
  return $this->conn->insert_id;

  // Trả về ID của bản ghi mới nhất
 
}
     
       
    }
?>

