<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Web Worksheet 2</title>
    <script src="js/list.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<div id="pageContainer" class="container">
    <ul id="todoList">
        <form class="row">
            <div class="col-md-10"><input type="text" class="form-control" id="product" placeholder="e.g. bread"></div>
            <input type="hidden" class="form-control" id="listid" value=<?php echo $_GET['id']; ?>>
            <div class="col-md-2"><button type="button" class="btn btn-primary" id="addproduct">Add Item</button></div>
        </form>

        <?php        
        $todoListsObj = new todoLists($DBH); //Lets pass through our DB connection

        $listid = $_GET['id']; //Set our list ID
        $listItems = $todoListsObj->getListItems($listid); //Call the getListItems function

        foreach ($listItems as $key => $value)
        { //Loop over returned items
          echo '<li data-id="'.$value['item_id'].'">'.$value['item_name'].'<i class="fa fa-times pull-right"></i></li>';
        }
        ?>

    </ul>
</div>