<?php

# membuat class Animal
class Animal
{
    # property animals menampung data dalam bentuk array
    public $animals = array();

    public function __construct()
    {
        $this->animals = [
            [
                'name' => 'Sapi',
            ],
            [
                'name' => 'Kucing',
            ],
            [
                'name' => 'Panda',
            ],
            [
                'name' => 'Harimau',
            ],
        ];
    }

    # method index - menampilkan data animals
    public function index()
    {
        # Gunakan foreach untuk menampilkan data animals (array) satu per satu.
        foreach ($this->animals as $animal) {
            echo $animal['name'] . "<br>";
        }

        # Kembalikan objek saat selesai
        return $this;
    }

    public function store($data)
    {
        # Method array_push untuk menambahkan data baru ke dalam array $animals.
        array_push($this->animals, ["name" => $data]);

        return $this;
    }

    public function update($index, $data)
    {
        # Mengganti data di indeks tertentu dengan data baru.
        $this->animals[$index]['name'] = $data;

        return $this;
    }

    public function destroy($index)
    {
        # Menghapus data di indeks tertentu menggunakan unset.
        unset($this->animals[$index]);

        return $this;
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$animal = new Animal();

echo "Index - Menampilkan seluruh hewan <br>";
$animal->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$animal->store('burung');
$animal->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$animal->update(0, 'Kucing Anggora');
$animal->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$animal->destroy(1);
$animal->index();
echo "<br>";