--TEST--
constructor problem
--FILE--
<?php
class TestPEAR
{
    public function __construct()
    {
        echo "TestPEAR::__construct\n";
    }
}
class TestArchive_Tar extends TestPEAR
{
    public function TestArchive_Tar()
    {
        echo "TestArchive_Tar::TestArchive_Tar\n";
        $this->TestPEAR();
    }
}
new TestArchive_Tar();
?>
--EXPECTF--
