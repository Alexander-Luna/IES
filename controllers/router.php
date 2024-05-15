<?php
require_once 'UserController.php';
if (isset($_REQUEST['op'])) {
    $action = $_REQUEST['op'];
    $userC = new UserController();
    switch ($_SERVER['REQUEST_METHOD']) {
        case 'GET':
            handleGetRequest($action, $userC);
            break;
        case 'POST':
            handlePostRequest($action, $userC);
            break;
        default:
            handleInvalidMethod();
            break;
    }
} else {
    handleMissingParameter();
}

function handleGetRequest($action, $userController)
{
    try {
        switch ($action) {

            case 'getUserData':
                $userController->getUserData();
                break;
            case 'getAllUsers':
                $userController->getAllUsers();
                break;
            default:
                handleNotFound();
                break;
        }
    } catch (error) {
        handleNotFound();
    }
}

function handlePostRequest($action, $userController)
{
    // try {
    switch ($action) {
        case 'login':
            $userController->login();
            break;
        case 'registro':
            $userController->registrar();
            break;
        case 'resetpassci':
            $userController->resetPassClient();
            break;
        case 'cambiarPass':
            $userController->cambiarPass();
            break;

        case 'updateUser':
            $userController->updateUsers();
            break;
        case 'deleteUser':
            $userController->deleteUsers();
            break;
        default:
            handleNotFound();
            break;
    }
    // } catch (error) {
    //     handleNotFound();
    // }
}

function handleInvalidMethod()
{
    http_response_code(405);
    echo json_encode(array("message" => "Método no permitido."));
}

function handleMissingParameter()
{
    http_response_code(400);
    echo json_encode(array("message" => "Parámetro 'op' faltante en la solicitud."));
}

function handleNotFound()
{
    http_response_code(404);
    echo json_encode(array("message" => "La acción solicitada no existe."));
}
