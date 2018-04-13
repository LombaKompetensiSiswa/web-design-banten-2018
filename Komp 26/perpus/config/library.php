<?php

	class library
	{

		protected $host = 'localhost';
		protected $user = 'root';
		protected $pass = '';
		protected $db = 'db_perpus';

		public $conn;

		public function __construct()
		{
			$this->conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
		}


		//lihat data
		public function tampil($table)
		{
			$query = mysqli_query($this->conn, "SELECT * FROM $table") OR die(mysqli_error());
			while ($f = mysqli_fetch_array($query)) {
				$hasil[] = $f;
			}

			return $hasil;
		}

		public function kembalikan($idBuku, $idPeminjaman, $jumlah) {
			$query = mysqli_query($this->conn, "UPDATE buku SET jumlah='$jumlah' WHERE id_buku='$id_buku'");
			$query = mysqli_query($this->conn, "DELETE FROM peminjaman WHERE id_peminjaman='$idPeminjaman'");

			if ($query == TRUE) {
				echo "<script>alert('Data Berhasil Di Kembalikan');document.location='?p=terimakasih'</script>";
			} else 
			echo "<script>alert('Data gagal Di Kembalikan');document.location='?p=data-peminjaman'</script>";
		}

		public function tampilPeminjam()
		{
			$query = mysqli_query($this->conn, "SELECT * FROM peminjaman, admin, buku WHERE peminjaman.id=admin.id AND peminjaman.id_buku=buku.id_buku") OR die(mysqli_error());

			while ($f = mysqli_fetch_array($query)) {
				$hasil[] = $f;
			}

			return $hasil;
		}

		public function tampilById($table, $field, $id)
		{
			$query = mysqli_query($this->conn, "SELECT * FROM $table WHERE $field='$id'") OR die(mysqli_error());
			while ($f = mysqli_fetch_array($query)) {
				$hasil[] = $f;
			}

			return $hasil;
		}

		public function tampilByInformatika() {
			$query = mysqli_query($this->conn, "SELECT * FROM buku, kategori WHERE ");
		}

		public function hapus($table, $field, $id, $location)
		{
			$query = mysqli_query($this->conn, "DELETE FROM $table WHERE $field='$id'") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diHapus');document.location='$location';</script>";
			} else {
				echo "<script>alert('Data gagal diHapus');document.location='$location';</script>";
			}
		}

		public function login($username, $password)
		{
			$query = mysqli_query($this->conn, "SELECT * FROM admin WHERE username='$username' AND password=md5('$password')") OR die(mysqli_error());

			$row = mysqli_fetch_array($query);

			if (mysqli_num_rows($query) != 0) {

				if ($row['hak_akses'] > 1) {
					session_start();
					$_SESSION['login'] = $username;
					echo "<script>alert('Anda berhasil Login!');document.location='user/index.php';</script>";
				} else {
					session_start();
					$_SESSION['login'] = $username;
					echo "<script>alert('Anda berhasil Login!');document.location='index.php';</script>";
				}
			} else {
				echo "<script>alert('Username atau Password anda Salah !');</script>";
			}
		}

		public function logout() {
			session_unset('login');
			header('location: login.php');
		}

		public function register($nama, $username, $password)
		{
			$query = mysqli_query($this->conn, "INSERT INTO admin VALUES (NULL, '$nama', '$username', md5('$password'), 2)") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Daftar berhasil');document.location='index.php';</script>";
			} else {
				echo "<script>alert('Daftar gagal');document.location='register.php';</script>";
			}
		}


		//Input Data
		public function inputAnggota($nama, $username, $password, $level)
		{
			$query = mysqli_query($this->conn, "INSERT INTO admin VALUES (NULL, '$nama', '$username', md5('$password'), '$level')") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diSimpan'); document.location='?p=data-anggota'</script>";
			} else {
				echo "<script>alert('Data gagal diSimpan'); document.location='?p=tambah-anggota'</script>";
			}
		}

		public function inputKategori($nama, $slug) {
			$query = mysqli_query($this->conn, "INSERT INTO kategori VALUES (NULL, '$nama', '$slug')") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diSimpan'); document.location='?p=data-kategori'</script>";
			} else {
				echo "<script>alert('Data gagal diSimpan'); document.location='?p=tambah-kategori'</script>";
			}
		}

		public function inputPeminjam($nama, $buku, $jumlah, $tgl_pinjam, $tgl_kembali) {
			$query = mysqli_query($this->conn, "INSERT INTO peminjaman VALUES (NULL, '$nama', '$buku', '$jumlah', '$tgl_pinjam', '$tgl_kembali')") OR die(mysqli_error());

			$query = mysqli_query($this->conn, "UPDATE buku SET jumlah='$jumlah' WHERE id_buku='$buku'") OR die(myqsli_error());

			if ($query == TRUE) {
				echo "<script>alert('Buku Berhasil Dipinjam'); document.location='?p=data-peminjaman'</script>";
			}
		}

		public function inputPeminjam1($nama, $buku, $jumlah, $tgl_pinjam, $tgl_kembali) {
			$query = mysqli_query($this->conn, "INSERT INTO peminjaman VALUES (NULL, '$nama', '$buku', '$jumlah', '$tgl_pinjam', '$tgl_kembali')") OR die(mysqli_error());

			$query = mysqli_query($this->conn, "UPDATE buku SET jumlah='$jumlah' WHERE id_buku='$buku'") OR die(myqsli_error());

			if ($query == TRUE) {
				echo "<script>alert('Buku Berhasil Dipinjam'); document.location='?p=informasi-buku'</script>";
			} else {
				echo "<script>alert('Buku gagal Dipinjam'); document.location='?p=informasi-buku'</script>";
			}
		}

		public function inputBuku($judul, $penulis, $jumlah, $kategori) {
			$query = mysqli_query($this->conn, "INSERT INTO buku VALUES (NULL, '$judul', '$penulis', '', '$jumlah', '$kategori')") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diSimpan');document.location='?p=data-buku'</script>";
			} else {
				echo "<script>alert('Data gagal diSimpan');document.location='?p=tambah-buku'</script>";
			}
		}

		public function tampilBuku() {
			$query = mysqli_query($this->conn, "SELECT * FROM buku, kategori WHERE buku.id_kategori=kategori.id_kategori") OR die(mysqli_error());

			while ($f = mysqli_fetch_array($query)) {
				$hasil[] = $f;
			}

			return $hasil;
		}

		public function logoutUser()
		{
			session_unset($_SESSION['login']);
			header('location: ../login.php');
		}

		public function jumlahData($table)
		{
			$query = mysqli_query($this->conn, "SELECT * FROM $table");

			return mysqli_num_rows($query);
		}


		//ubah data
		public function updateAnggota($id, $nama, $username, $password, $level)
		{
			$query = mysqli_query($this->conn, "UPDATE admin SET nama_lengkap='$nama', username='$username', password=md5('$password'), hak_akses='$level' WHERE id='$id'") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diUbah');document.location='?p=data-anggota'</script>";
			} else {
				echo "<script>alert('Data gagal diUbah');document.location='?p=edit-anggota'</script>";
			}
		}

		public function updateBuku($id, $judul, $penulis, $jumlah, $kategori) {
			$query = mysqli_query($this->conn, "UPDATE buku SET judul_buku='$judul', penulis='$penulis', gambar=null, jumlah='$jumlah', id_kategori='$kategori' WHERE id_buku='$id'") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diUbah');document.location='?p=data-buku'</script>";
			} else {
				echo "<script>alert('Data berhasil diUbah');document.location='?p=data-buku'</script>";
			}
		}

		public function updateKategori($id, $nama, $slug) {
			$query = mysqli_query($this->conn, "UPDATE kategori SET nama_kategori='$nama', slug='$slug' WHERE id_kategori='$id'") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diEdit'); document.location='?p=data-kategori'</script>";
			} else {
				echo "<script>alert('Data gagal diEdit'); document.location='?p=edit-kategori'</script>";
			}
		}

		public function updatePeminjaman($id, $nama, $buku, $jumlah, $tgl_pinjam, $tgl_kembali) {
			$query = mysqli_query($this->conn, "UPDATE peminjaman SET id='$nama', id_buku='$buku', jumlah='$jumlah', tgl_pinjam='$tgl_pinjam', tgl_kembali='$tgl_kembali' WHERE id_peminjaman='$id'") OR die(mysqli_error());

			if ($query == TRUE) {
				echo "<script>alert('Data berhasil diEdit'); document.location='?p=data-peminjaman'</script>";
			} else {
				echo "<script>alert('Data gagal diEdit'); document.location='?p=edit-peminjaman'</script>";
			}
		}

		public function cari($field, $location)
		{
			$query = mysqli_query($this->conn, "SELECT * FROM buku, kategori LIKE '%$field%'") OR die(mysqli_error());

			while ($f = mysqli_fetch_array($query)) {
				$hasil[] = $f;
			}

			return $hasil;
			header('location: $location');
		}

	}


?>