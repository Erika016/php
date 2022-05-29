<?php
class CityController
{
    private $cityRepository, $uri;
    function __construct(Database $cityRepository)
    {
        header('Content-Type: application/json; charset=utf-8');
        $this->cityRepository = $cityRepository;
        $this->uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $this->uri = explode('/', $this->uri);
        if (!$this->uri[4] || $this->uri[4] != 'city') {
            header('HTTP/1.1 404 Not Found');
            $response = json_encode(['status' => 'KO', 'data' => null, 'message' => 'Endpoint not available']);
            die($response);
        }
    }
    function handle()
    {
        $action = $_SERVER['REQUEST_METHOD'];
        switch ($action) {
            case 'GET':
                return $this->getData();
            case 'POST':
                return $this->insertData();
            case 'PUT':
                return $this->updateData();
            case 'DELETE':
                return $this->deleteData();
        }
    }
    function getData()
    {
        echo json_encode($this->cityRepository->setQuery($this->uri[4]));
    }
    function insertData()
    {
        header('HTTP/1.1 201 Created');
        $json = file_get_contents('php://input');
        $data = json_decode($json,true);
        $this->cityRepository->insertData($this->uri[4],'sssi',$data, 'name=?','countrycode=?','district=?','population=?');
        echo json_encode(['status' => 'OK', 'data' => $data, 'message' => 'New City created']);
    }
    function updateData()
    {
        header('HTTP/1.1 201 Created');
        $json = file_get_contents('php://input');
        $data = json_decode($json,true);
        $this->cityRepository->updateData($this->uri[4],'si',$data['name'], 'name=?', $data['id']);
        echo json_encode(['status' => 'OK', 'data' => $data, 'message' => 'City updated']);
    
    }
    function deleteData()
    {
        header('HTTP/1.1 202 Accepted');
        $json = file_get_contents('php://input');
        $data = json_decode($json,true);
        $this->cityRepository->deleteData($this->uri[4],'i', $data['id']);
        echo json_encode(['status' => 'OK', 'data' => $data, 'message' => 'City deleted']);
    
    }
}
