<?php

//dà type error se passi tipi sbagliati
declare(strict_types=1);

namespace Dadeit1987\EserciziPhp\Services;

class Orm
{
    private \mysqli $mysqli;
    private array $data;
    private string $sql;
    private array $params=[];
    public function __construct()
    {
        $this->mysqli = new \mysqli($_ENV['DATABASE_HOST'], $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD'], $_ENV['DATABASE_NAME'], (int)$_ENV['DATABASE_PORT']);

        if ($this->mysqli -> connect_errno) {
            throw new \Exception("Failed to connect to MySQL: " . $this->mysqli -> connect_error);
        }
    }

    public function __destruct()
    {
        $this->mysqli -> close();
    }

    public function select(string $table): self
    {
        $this->sql = "SELECT * FROM $table";

        return $this;
    }

    public function raw(string $sql): self
    {
        $this->sql=$sql;

        return $this;
    }

    public function where(array $params): self
    {
        $this->params=$params;



        if(count($this->params)>0) {
            $this->sql .= " WHERE ";

            $i=0;

            foreach($this->params as $index=>$param) {

                if($i!=0) {
                    $this->sql .= " AND ";
                }
                $this->sql .= "$param[0]$param[1]?" ;
                $i++;

            }
        }

        return $this;
    }


    public function get(): array
    {
        $types='';
        $values=[];

        $stmt = $this->mysqli->prepare($this->sql);

        if(count($this->params)>0) {
            foreach($this->params as  $value) {
                if(is_string($value[2])) {
                    $types.='s';
                }
                if(is_int($value[2])) {
                    $types.='i';
                }
                if(is_float($value[2])) {
                    $types.='i';
                }

                $values[]=$value[2];
            }

            $stmt->bind_param($types, ...$values);
        }
        $stmt->execute();

        $result = $stmt->get_result();

        $this->data = $result->fetch_all(MYSQLI_ASSOC);

        return $this->data;
    }
}
