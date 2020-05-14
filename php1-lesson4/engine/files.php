<?php
function uploadFile(string $destination, string $attributeName = 'file') : int{ //string - проверка на тип передаваемых данных, int приведение к типу передаваемых данных
    if(isset($_FILES['my_file'])) {
        return move_uploaded_file(
            $_FILES[$attributeName]['tmp_name'],
            $destination
        );
    }
    return false;
}
