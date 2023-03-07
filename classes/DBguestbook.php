<?php
include ("guestbook.php");

/**
 *
 */
class DBguestbook
{

    private $posts=[];
    /**
     * @var false|mysqli
     */
    private $link;

    /**
     *
     */
    public function __construct()
    {
        $this->link=mysqli_connect('localhost','root','','labb4');

       // $this->link=mysqli_connect('studentmysql.miun.se','naal2001','ky5xmwbc','naal2001');
        if (!$this->link){
            die('could not connect');
        }

        $sql="select * from guestbooktable;";

        $result=$this->link->query($sql);

        if (mysqli_num_rows($result) > 0){
            while ($posts=mysqli_fetch_array($result)){

                $this->posts[]=new guestbook($posts["Username"],$posts["Post"],$posts["PostDate"]);
            }
        }
    }

    /**
     * @param $name
     * @param $message
     * @param $date
     * @return void
     */
    public function addPost($name, $message, $date)
    {
       $this->posts[]=new guestbook($name,$message,$date);
        //Lägger in de nya värdena i databasen
        $sql = "INSERT into guestbooktable values ('" . $name . "', '" . $message . "', '" . $date . "');";
        $this->link->query($sql);
    }

    /**
     * @param $index
     * @return void
     */
    public function delPost($index){

       //Tar bort värdena som är ekvivalent vid medlemsarrayens index
       $sql = "DELETE from guestbooktable where Username='" . $this->posts[$index]->getUsername() . "' and Post='" . $this->posts[$index]->getMessage() . "' and PostDate='" . $this->posts[$index]->getDate() . "';";
       $this->link->query($sql);
       unset($this->posts[$index]);
   }

    /**
     * @return array
     */
    public function getPost()
    {
        return $this->posts;
    }



}
/*
$test=new DBguestbook();
foreach ($test->getPost() as $obj){
    print $obj->getUsername();
}
$test->delPost(1);
*/
