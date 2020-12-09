<?php
function showError($errors, $name)
{
    if ($errors->has($name))
        return '
     <div class="alert alert-danger">
          <strong>' . $errors->first($name) . '</strong>
     </div>
    ';
}

function getCategory($arr, $parent, $shift, $id_selected)
{
    foreach ($arr as $value) {
        if ($value['parent'] == $parent) {
            if ($value['id'] == $id_selected) {
                echo "<option value=" . $value['id'] . " selected>" . $shift . $value['name'] . "</option selected>";
            } else {
                echo "<option value=" . $value['id'] . ">" . $shift . $value['name'] . "</option>";
            }
            getCategory($arr, $value['id'], $shift . "|--- ", $id_selected);
        }
    }
}

function showCategory($arr, $parent, $shift)
{
    foreach ($arr as $value) {
        if ($value['parent'] == $parent) {
            echo '
         <div class="item-menu"><span>'. $shift . $value['name'] .'</span>
		    <div class="category-fix">
				<a class="btn-category btn-primary" href="/admin/category/edit/'.$value['id'].'"><i class="fa fa-edit"></i></a>
				<a class="btn-category btn-danger" onclick="delCategory()" href="/admin/category/delete/'.$value['id'].'"><i class="fas fa-times"></i></i></a>
			</div>
		</div>
             ';
            showCategory($arr, $value['id'], $shift . "|--- ");
        }
    }
}



function getLevel($arr, $parent, $count) {
    foreach ($arr as $value) {
        if ($value['id']==$parent) {
            $count++;
            if ($value['parent']==0) {
                return $count;
            }
            return getLevel($arr,$value['parent'],$count);
        }
    }

}
