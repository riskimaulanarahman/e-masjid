<?php
if($type_query === "show"){
    $hasil = mysqli_query($con,$query);
    if (mysqli_num_rows($hasil) > 0) {
     while ($data = mysqli_fetch_assoc($hasil))
     {
        $response['message'] = "Success";
        $response['data'][] = $data;
     }
     echo json_encode($response);
     }
     else {
         $response["data"] = null;
         $response["message"] = "Error";

         echo json_encode($response);
     }
    }

     
else if ($type_query === "input"){
        $hasil = mysqli_multi_query($con,$query);
        if($hasil){
            $response['message'] = "Success";
            $response['data'][] = $data;
            echo json_encode($response);
        }else
        {
            $response["data"] = null;
            $response["message"] = "Error";
            
            echo json_encode($response);

        }
     }


else if ($type_query === "edit"){
        $hasil = mysqli_multi_query($con,$query);
        if($hasil){
            $response['message'] = "Success";
            $response['data'][] = $data;
            echo json_encode($response);
        }else
        {
            $response["data"] = null;
            $response["message"] = "Error";

            echo json_encode($response);

        }
     }

else if ($type_query === "update"){
        $hasil = mysqli_multi_query($con,$query);
        if($hasil){
            $response["data"] = "data berhasil diupdate.";
            $response["message"] = "Success";
            echo json_encode($response);
        }else
        {
            $response["data"] = "";
            $response["message"] = "Error";

            echo json_encode($response);

        }
     }
else {
    if ($message === null){
        $message = 'show error!';
    }else{
        $message = $message;
    }
    $response["data"] = "";
    $response["message"] = "Error";

    echo json_encode($response);
}

     ?>

