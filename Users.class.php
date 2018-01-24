<?php
require_once ("Controller.php");
class Users extends Controller
{
	public function add($first_name, $last_name)
	{
		$sth = $this->dbh->query('INSERT INTO Users (first_name, last_name) VALUES ("'.$first_name.'", "'.$last_name.'")');

		header('Location: /');
	}

	public function edit($first_name, $last_name)
    {
        $sth = $this->dbh->query('UPDATE Users SET last_name="'.$last_name.'" WHERE first_name="'.$first_name.'"');

        header('Location: /');
    }

    public function delete($first_name)
    {
        $sth = $this->dbh->query('DELETE FROM Users WHERE first_name="'.$first_name.'"');

        header('Location: /');
	}
    public function show()
    {
        $sth = $this->dbh->query("SELECT * FROM Users;");
        $arr = [];
        while ($row = $sth->fetch())
        {
//            echo var_dump($row);
//            echo "<hr>";
            $arr[] = $row;
        }
       echo var_dump($arr);
        foreach ($arr as $element)
        {
//            echo var_dump($element)."<hr>";
            echo "<li>$element[0] $element[1]</li><br>";
        }
    }
}
