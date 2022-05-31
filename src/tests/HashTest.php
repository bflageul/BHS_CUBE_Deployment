<?php

use PHPUnit\Framework\TestCase;
use App\Utility\Hash;

class HashTest extends TestCase 
{
	// Le hash généré par l’algorithme SHA256 doit être identique pour le même paramètre
	public function testHashGenerate()
	{
		$this->assertSame("9f86d081884c7d659a2feaa0c55ad015a3bf4f1b2b0b822cd15d6c15b0f00a08", Hash::generate("test"));
		$this->assertSame("e3b0c44298fc1c149afbf4c8996fb92427ae41e4649b934ca495991b7852b855", Hash::generate(""));
		$this->assertSame("37268335dd6931045bdcdf92623ff819a64244b53d0e746d438797349d4da578", Hash::generate("test", "test"));
		$this->assertSame(Hash::generate("test", "test"), Hash::generate("testtest"));
		$this->assertSame("dcce7a9a1b433712b2bf9f5277947bbff7f4ac92b9007df413687b2c191cadd0", Hash::generate(5888));
		$this->assertSame("7aa3557aaa8890a9dd8068c757b52bbd958aa2ec793853cffd240deef9c53164", Hash::generate(-89));
		$this->assertSame("2fd690a533569717b4ae5651a0cb6443c3f22825d9a3e2b3c817e623f42ee32f", Hash::generate(897.8));
	}

	// La longueur du Sel généré doit être la même que celle passée en paramètre de generateSalt
	public function testGenerateSalt()
	{
		$this->assertSame(12, strlen(Hash::generateSalt(12)));
		$this->assertSame(0, strlen(Hash::generateSalt(0)));
		$this->assertSame(5, strlen(Hash::generateSalt("5")));
		$this->assertSame(1, strlen(Hash::generateSalt("0.5")));
		$this->assertSame(0, strlen(Hash::generateSalt(-5)));
	}

	// La chaine de caractères renvoyée par un Hash de type SHA256 contient toujours 64 caractères
	public function testGenerateUnique(){
		$this->assertSame(64, strlen(Hash::generateUnique()));
	}
} 