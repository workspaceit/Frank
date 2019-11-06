<html>
    <title></title>
    <head>
    </head>
    <body>
        <?php 
          $temp='';
          foreach($all_data as $RowData) { 
           
            if($temp==$RowData->category) { 
        ?>
    
            <label>Sub_Category :</label>
            <?php echo $RowData->sub_category;?>
            
            <?php } else { 
                $temp=$RowData->category;
                ?>
            </div>
       
       
            <div>
            <label>Category :</label>
             <?php echo $RowData->category;?>
            <br>
            <label>Sub_category :</label>
             <?php echo $RowData->sub_category;?>
              <br>
        <?php } }?>
    </body>
</html>