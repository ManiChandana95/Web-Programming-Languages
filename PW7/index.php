<?php

function http_response($data)
	{
		$response['status_message']="Books table data in JSON format using PHP";
		$response['data']=$data;
		$json_response = json_encode($response);
		echo $json_response;
	}

	$connection=mysqli_connect("localhost","root","root","PW7");
	if (mysqli_connect_errno())
	{
		die("Connection failed");
	}
	else
	{
		$query="SELECT ISBN,Author,Title,Price,Category from Books;";
		$query_result = mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($query_result))
		{
			$data[]=array("ISBN"=>$row['ISBN'],"Author"=>$row['Author'],"Title"=>$row['Title'],"Price"=>$row['Price'],"Category"=>$row['Category']);
		}
		http_response($data);
	}
	mysqli_close();

?>