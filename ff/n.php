<?php require_once ('../template/header.php');
echo '<title>NETMIN: File/Folder Management</title></head>
 <section id="content">

        <div class="block">
            <div class="inner width-2">
                <div class="box-login">
                    <div class="head">
                        <h2 class="heading-title">File/Folder Management</h2><em> <h3>Create (empty) or Delete File/Folder</h3></em>
</div>
                    <div class="box-form">
					
                        <form method="post" name="form" action="check.php">
<p><select name="opt" class="text-input focus" required pattern="[A-Za-z]"></p>
<option> </option>
<option>Create File</option>
<option>Create Folder</option>
<option>Delete</option>
</select>
<p><input type="text" class="text-input focus" name="fname" placeholder="Enter the File/Folder name" required pattern="[*.A-za-z0-9-_]{1,50}"/></p>
<p><input type="text" class="text-input focus" name="path" placeholder="Enter the File/Folder absolute path" required pattern="[/.A-za-z0-9-_]{1,50}"/></p>
<p><input type="submit" name="execute" value="Execute" class="button large bold"></p>
</form></div>
                </div>
            </div>
        </div>
    </section>
 </body>
</html>';
?>