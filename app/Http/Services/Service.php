<?php
namespace App\Http\Services;

class Service implements ServiceInterface
{

    protected $message;
    protected $status;

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return (int) $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function buildResponse($data)
    {
        return response()->json([
            'message'=> $this->getMessage(),
            'data'=> $data
        ], $this->getStatus());
    }
}
