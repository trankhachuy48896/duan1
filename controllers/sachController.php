<?php
class sachController{
    public function chi_tiet() {
        $danhmuc = (new danhmuc) -> dm_client();
        $id_sp = $_GET['id_sp'];
        $sach = (new sach) -> find_one($id_sp);
        // Cập nhập lượt xem
        (new sach)->update_luotXem($id_sp);

        // Lưu thông tin URI vào session
        $_SESSION['URI'] = $_SERVER['REQUEST_URI'];

        $_SESSION['totalQuantity'] = (new giohangController) -> totalSumQuantity();
        view('chitiet', ['danhmuc' => $danhmuc, 'sach' => $sach]);
    }

    public function sachIndanhmuc()
    {
        // Lấy thông tin id
        $id_dm = $_GET['id_dm'];
        // Lấy dữ liệu theo danhmuc
        $sach = (new sach)->sach_dm($id_dm);
        // Danh mục 
        $danhmuc = (new danhmuc)->dm_client();
        view('sachTheoDM', ['sach' => $sach, 'danhmuc' => $danhmuc]);
    }


    public function search() {
        // Lấy từ khóa tìm kiếm
        $keyword = $_GET['keyword'];
        // Lấy dữ liệu tìm được
        $sach = (new sach) -> search($keyword);
        view("timkiem", ['keyword' => $keyword, 'sach' => $sach]);
    }
}
?>