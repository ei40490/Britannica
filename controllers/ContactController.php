<?php

include 'C:\xampp\htdocs\Britannica\config\Database.php';

class ContactController
{
    protected $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function all()
    {
        $query = $this->db->pdo->query('SELECT * FROM contact');

        return $query->fetchAll();
    }

    public function store($request)
    {
        

        $query = $this->db->pdo->prepare('INSERT INTO contact (emri, email, phone, message ) VALUES (:emri, :email, :phone, :message )');
        $query->bindParam(':emri', $request['emri']);
        $query->bindParam(':email', $request['email']);
        $query->bindParam(':phone', $request['phone']);
        $query->bindParam(':message', $request['message']);
        $query->execute();

        return header('Location: ./index.php');
    }

    public function edit($id)
    {
        $query = $this->db->pdo->prepare('SELECT * FROM contact WHERE id = :id');
        $query->execute(['id' => $id]);

        return $query->fetch();
    }

    public function update($id, $request)
    {
        // isset($request['is_admin']) ? $isAdmin = 1 : $isAdmin = 0;

        $query = $this->db->pdo->prepare('UPDATE users SET emri = :emri, email = :email, phone = :phone, message = : message WHERE id = :id');
        $query->execute([
            'name' => $request['Emri'],
            'email' => $request['email'],
            'phone' => $phone,
            'message' => $message,
            'id' => $id
        ]);

        return header('Location: ./index.php');
    }

    public function destroy($id)
    {
        $query = $this->db->pdo->prepare('DELETE FROM contact WHERE id = :id');
        $query->execute(['id' => $id]);

        return header('Location: ./index.php');
    }
}
