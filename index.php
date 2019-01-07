<?php include 'templates/header.php';?>
<?php include 'backend/todo.php'; ?>
<?php 
    $todos = gettodos();
    $done = getdone();
?>
    <div class="container">
        <div  class="add-box container ">
        <h1 id="head" class="text-center">Add Todos</h1>
        <div class="container">
     
            <?php foreach($todos as $todo){ ?>
            <div class="row todo">
            <p class="todo-text"> <span id="content<?=$todo['id']?>"><?=$todo['content']?></span> 
            <input  id="input<?=$todo['id']?>" value="<?=$todo['content']?>" class="inputedit" type="text">
            <button id="deletebtn<?=$todo['id']?>" onclick="deletetodo('<?=$todo['id']?>')" class="btn nb btn-right btn-sm btn-danger">Delete</button>

            <button id="donebtn<?=$todo['id']?>" onclick="donetodo('<?=$todo['id']?>')" class="btn nb btn-center btn-sm btn-success">Done</button>
            <button id="doneeditbtn<?=$todo['id']?>" onclick="doneedit('<?=$todo['id']?>')" class="btn btn-sm btn-success edbtndone">Done</button>
            <button id="canceleditbtn<?=$todo['id']?>" onclick="reload()" class="btn btn-sm btn-danger edbtncancel">Cancel</button>

            <button id="editbtn<?=$todo['id']?>" onclick="edit('<?=$todo['id']?>')" class="btn nb btn-left btn-sm btn-info">Edit</button></p>            

            </div>

            <?php } ?>
            
           
        </div>
        <input id="todocontent" class="form-control" placeholder="Enter todo">
        <div class="text-center" style="padding-top:10px;">
        <button onclick="addtodo()" class="btn btn-secondary">Add</button>

        </div>
        </div>

        <div  class="add-box container ">
        <h1 id="head" class="">Completed Todos</h1> <button onclick="doneclear()" class="btn btn-info btn-right1">Clear</button>
        <div class="container">
            <?php if(count($done) == 0) { ?>
    <h3>Complete a todo :)</h3>
               <?php } ?>
            <?php foreach($done as $todo){ ?>
            <div class="row todo">
            <p class="todo-text"> <span id="content<?=$todo['id']?>"><?=$todo['content']?></span> 
            <button id="deletebtn<?=$todo['id']?>" onclick="deletetodo('<?=$todo['id']?>')" class="btn nb btn-right btn-sm btn-danger">Delete</button>

            <button id="donebtn<?=$todo['id']?>" onclick="undo('<?=$todo['id']?>')" class="btn nb btn-center btn-sm btn-info">Undo</button>
            </p>            

            </div>

            <?php } ?>
            
           
        </div>
       
        </div>
        <button onclick="dbclear()" class="btn btn-info btn-right-top">Clear All</button>
        
    </div>
<?php include 'templates/footer.php'; ?> 