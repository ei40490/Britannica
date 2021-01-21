<?php

include 'C:\xampp\htdocs\Britannica\config\Database.php';

class KursetController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM kurset');

        return $query->fetchAll();
    }

    public function store($request)
    {
        

        $query = $this->db->pdo->prepare('INSERT INTO kurset (titulli, pershkrimi, foto) VALUES (:titulli, :pershkrimi, :foto)');
        $query->bindParam(':titulli', $request['titulli']);
        $query->bindParam(':pershkrimi', $request['pershkrimi']);
        $query->bindParam(':foto', $request['foto']);
        $query->execute();
        

        // return header('Location: ./index.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM kurset WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
       

        $query = $this->db->pdo->prepare('UPDATE kurset SET titulli = :titulli, pershkrimi = :pershkrimi, foto = :foto WHERE id = :id');
        $query->execute([
            'titulli' => $request['titulli'],
            'pershkrimi' => $request['pershkrimi'],
            'foto' => $request['foto'],
            'id' => $id
        ]);

        return header('Location: ./edit-or-delete-course.php');
    }

    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM kurset WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ./edit-or-delete-course.php');
    }
}
