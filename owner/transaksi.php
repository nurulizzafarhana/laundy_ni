<?php 
//generateTransactionCode()
function generateTransactionCode(){
    $kode = date('YmdHis');

    return $kode;
}
?>

<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Jet HTML Free  - Bootstrap 5 HTML Multipurpose Admin Dashboard Theme
Upgrade to Pro: https://keenthemes.com/products/jet-html-pro
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
	<!--begin::Head-->
	<head><base href="../">
		<meta charset="utf-8" />
		<title>Laundry App</title>
		<meta name="description" content="Jet admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
		<meta name="keywords" content="Jet theme, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard" />
		<link rel="canonical" href="Https://preview.keenthemes.com/jet-free" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside aside-extended bg-white" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Primary-->
					<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
						<!--begin::Logo-->
						<div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto pt-10" id="kt_aside_logo">
							<a href="owner/index_owner.php">
								<img alt="Logo" src="assets/media/logos/logo-compact.svg" class="h-55px" />
							</a>
						</div>
						<!--end::Logo-->
						<!--begin::Nav-->
						<div class="aside-nav d-flex flex-column flex-lg-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
							<!--begin::Primary menu-->
							<div id="kt_aside_menu" class="menu menu-column menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5" data-kt-menu="true">
								<div class="menu-item py-2">
									<a class="menu-link menu-center" href="owner/index_owner.php" title="Dashboard" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<!--begin::Svg Icon | path: icons/duotone/Home/Home2.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M21.4622 10.699C21.4618 10.6986 21.4613 10.6981 21.4609 10.6977L13.3016 2.53955C12.9538 2.19165 12.4914 2 11.9996 2C11.5078 2 11.0454 2.1915 10.6974 2.5394L2.54246 10.6934C2.53971 10.6961 2.53696 10.699 2.53422 10.7018C1.82003 11.42 1.82125 12.5853 2.53773 13.3017C2.86506 13.6292 3.29739 13.8188 3.75962 13.8387C3.77839 13.8405 3.79732 13.8414 3.81639 13.8414H4.14159V19.8453C4.14159 21.0334 5.10833 22 6.29681 22H9.48897C9.81249 22 10.075 21.7377 10.075 21.4141V16.707C10.075 16.1649 10.516 15.7239 11.0582 15.7239H12.941C13.4832 15.7239 13.9242 16.1649 13.9242 16.707V21.4141C13.9242 21.7377 14.1866 22 14.5102 22H17.7024C18.8909 22 19.8576 21.0334 19.8576 19.8453V13.8414H20.1592C20.6508 13.8414 21.1132 13.6499 21.4613 13.302C22.1786 12.5844 22.1789 11.4171 21.4622 10.699V10.699Z" fill="#00B2FF" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</a>
								</div>
								<div data-kt-menu-trigger="click" data-kt-menu-placement="right-start" data-kt-menu-flip="bottom" class="menu-item py-2">
									<span class="menu-link menu-center" title="Account Pages" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
										<span class="menu-icon me-0">
											<!--begin::Svg Icon | path: icons/duotone/Shopping/Chart.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M15.7632 15.2206C15.4599 14.9148 14.9749 14.8913 14.6449 15.166C13.1591 16.3965 10.8415 16.3965 9.35567 15.166C9.02566 14.8913 8.54066 14.9148 8.23733 15.2206L5.29062 18.1907C5.12812 18.3537 5.04062 18.5763 5.04644 18.8073C5.05226 19.0374 5.15226 19.255 5.32226 19.4095C7.16478 21.0802 9.53649 22 11.9998 22C14.4632 22 16.8357 21.0802 18.6782 19.4095C18.8482 19.255 18.9474 19.0374 18.9541 18.8073C18.9599 18.5763 18.8716 18.3537 18.7099 18.1907L15.7632 15.2206Z" fill="#E4E6EF" />
													<path d="M7.90424 12.672C7.85592 12.4048 7.83342 12.1587 7.83342 11.9202C7.83342 10.1479 8.95012 8.55864 10.6118 7.96563C10.9443 7.84637 11.1668 7.52969 11.1668 7.17355V2.84096C11.1668 2.59149 11.0568 2.35461 10.8668 2.19503C10.6768 2.03545 10.4226 1.96907 10.1826 2.01443C5.44172 2.89388 2 7.06012 2 11.9202C2 13.5136 2.36582 15.0474 3.08919 16.4795C3.21001 16.7189 3.43838 16.8861 3.7017 16.9281C3.74502 16.9348 3.7892 16.9382 3.8317 16.9382C4.05088 16.9382 4.2642 16.8508 4.42089 16.692L7.67342 13.4145C7.86589 13.2196 7.95257 12.9424 7.90424 12.672Z" fill="#E4E6EF" />
													<path d="M13.8174 2.01438C13.5774 1.96819 13.3232 2.03454 13.1341 2.19499C12.9432 2.35457 12.8332 2.59144 12.8332 2.84008V7.17351C12.8332 7.52882 13.0557 7.84632 13.3882 7.96476C15.0499 8.55863 16.1666 10.1478 16.1666 11.9202C16.1666 12.1588 16.1441 12.4048 16.0958 12.672C16.0483 12.9424 16.1341 13.2196 16.3275 13.4136L19.5792 16.692C19.7367 16.8508 19.9492 16.9382 20.1683 16.9382C20.2117 16.9382 20.2558 16.9348 20.2983 16.9273C20.5625 16.8853 20.79 16.7181 20.9117 16.4787C21.6342 15.0474 22 13.5136 22 11.9202C22 7.05925 18.5583 2.89383 13.8174 2.01438Z" fill="#E4E6EF" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
									</span>
									<div class="menu-sub menu-sub-dropdown w-225px px-1 py-4">
										<div class="menu-item">
											<div class="menu-content">
												<span class="menu-section fs-5 fw-bolder ps-1 py-1">Account</span>
											</div>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="owner/logout.php">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Logout</span>
											</a>
										</div>
									</div>
								</div>
								
								
								
								
							</div>
							<!--end::Primary menu-->
						</div>
						<!--end::Nav-->
						<!--begin::Footer-->
						<div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
						</div>
						<!--end::Footer-->
					</div>
					<!--end::Primary-->
					<!--begin::Action-->
					<!--begin::Secondary-->
					<div class="aside-secondary d-flex flex-row-fluid">
						<!--begin::Workspace-->
						<div class="aside-workspace overflow-auto my-2 my-lg-7 px-3 px-lg-7" id="kt_aside_wordspace">
							<!--begin::Secondary menu-->
							<div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-400 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-5 my-5 mt-lg-2 mb-lg-0" id="kt_aside_menu" data-kt-menu="true">
								<div id="kt_aside_menu_wrapper" class="menu-fit hover-scroll-y me-lg-n5 pe-lg-5" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-offset="20px" data-kt-scroll-wrappers="#kt_aside_wordspace">
									<div class="menu-item">
										<div class="menu-content">
											<span class="menu-section fs-5 fw-bolder ps-1 py-1">CRUD Data Transaksi</span>
										</div>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="./kasir/transaksi.php">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Transaksi</span>
										</a>

									</div>
									
								</div>
							</div>
							<!--end::Secondary menu-->
						</div>
						<!--end::Workspace-->
					</div>
					<!--end::Secondary-->
					<!--begin::Aside Toggle-->
					<button class="btn btn-sm btn-icon btn-white btn-active-primary position-absolute translate-middle mb-4 start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
						<!--begin::Svg Icon | path: icons/duotone/Navigation/Left-2.svg-->
						<span class="svg-icon svg-icon-2 rotate-180">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000)" x="14" y="7" width="2" height="10" rx="1" />
									<path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997)" />
								</g>
							</svg>
						</span>
						<!--end::Svg Icon-->
					</button>
					<!--end::Aside Toggle-->
					<!--end::Action-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-2 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="text-dark fw-bolder my-1 fs-2">Transaksi Pembayaran</h1>
								<!--end::Heading-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb fw-bold fs-base my-1">
									<li class="breadcrumb-item text-muted">
										<a href="index.html" class="text-muted">Home</a>
									</li>
									<li class="breadcrumb-item text-muted">Kasir</li>
									<li class="breadcrumb-item text-dark">Transaksi</li>
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n2 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
									<span class="svg-icon svg-icon-2x">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
												<path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
											</g>
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="index.html" class="d-flex align-items-center">
									<img alt="Logo" src="assets/media/logos/logo-compact.svg" class="max-h-40px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Toolbar wrapper-->
							<div class="d-flex align-items-stretch flex-shrink-0">
								<!--begin::Search-->
								<div class="d-flex align-items-stretch ms-1 ms-lg-3">
									<!--begin::Search-->
									<div id="kt_header_search" class="d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
									</div>
									<!--end::Search-->
								</div>
								<!--end::Search-->
							</div>
							<!--end::Toolbar wrapper-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container" id="kt_content_container">
							<!--begin::About card-->
							<div class="card">
								<!--begin::Body-->
								<div class="card-body p-lg-17">
									<!--begin::About-->
									<div class="mb-18">
										<!--begin::Wrapper-->
										<div class="mb-10">
											<!--begin::Top-->
                                            
												<!-- Button trigger modal -->
                                                 <br><br><br>
											    <div class="text-center mb-15">
												<!--begin::Text-->

                                                 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
                            
                                                            <table class="table table-hover my-0">
                                                                <thead>
                                                                    <tr>
                                                                        <th>No</th>
																		
																		<th>Kode Transaksi</th>
                                                                        <th>Outlet</th>
                                                                        <th class="d-none d-xl-table-cell">Tanggal</th>
                                                                        <th class="d-none d-xl-table-cell">Batas Waktu</th>
																		<th class="d-none d-xl-table-cell">Pembayaran</th>
																		<th class="d-none d-xl-table-cell">Tanggal Dibayar</th>
																		<th class="d-none d-xl-table-cell">Customer</th>
																		<th class="d-none d-xl-table-cell">Paket</th>
                                                                        <th>Status Order</th>
                                                                        <th class="d-none d-md-table-cell">Aksi</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                <?php
                                                            include "koneksi.php";
                                                            $qry_transaksi = mysqli_query($conn, "SELECT * FROM transaksi JOIN outlet ON outlet.id_outlet = transaksi.id_outlet JOIN member ON member.id_member = transaksi.id_member JOIN detail_transaksi ON detail_transaksi.id_transaksi = transaksi.id_transaksi JOIN paket ON paket.id_paket = detail_transaksi.id_paket");

                                                            $no=0;
                                                            while($data_transaksi=mysqli_fetch_array($qry_transaksi)){
                                                            $no++;?>
                                                                    <tr class="text-xs font-weight-bold">
                                                                        <td class="align-middle text-left"><?=$no?></td>
                                                                        <td class="align-middle text-left"><?=$data_transaksi['kode_transaksi']?></td>
                                                                        <td class="align-middle text-left"><?=$data_transaksi['nama']?></td>
																		<td class="align-middle text-left"><?=$data_transaksi['tgl']?></td> 
																		<td class="align-middle text-left"><?=$data_transaksi['batas_waktu']?></td> 
																		<td class="align-middle text-left"><?=$data_transaksi['dibayar']?></td> 
																		<td class="align-middle text-left"><?=$data_transaksi['tgl_bayar']?></td> 
                                                                        <td class="align-middle text-left"><?=$data_transaksi['nama_member']?></td>
																		<td class="align-middle text-left"><?=$data_transaksi['nama_paket']?></td>
																		<td class="align-middle text-left"><?=$data_transaksi['status']?></td>
																		
                                                                        <td class="align-middle text-left">
                                                                        <a href="./kasir/detail_transaksi.php?id_transaksi=<?php echo $data_transaksi['id_transaksi']?>" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                                                                        <a href="./kasir/hapus_transaksi.php?id_transaksi=<?=$data_transaksi['id_transaksi']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger"><i class="far fa-trash-alt"></i></a></td>
                                                                        </td>
                                                                    </tr>
                                                                    <?php
                                                                    }
                                                                    ?>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>

                                            <!-- Modal -->
                                            <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                <div class="modal-content">
													
                                                    <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Transaksi Laundry</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                    <form method="POST" action="admin/proses_tambah_transaksi.php" enctype="multipart/form-data">
                                                    <section class="base">
                                                    <div class="container">
														<div class="row">
															<div class="col-md-6">
																<div class="mb-3">
																	<label for="exampleInputEmail1" class="form-label">Nama Outlet</label>
																	<select name="id_outlet" class="form-control">
																		<option></option>
																			
																		<?php
																		include "koneksi.php";
																		$qry_outlet=mysqli_query($conn,"select * from outlet");
																		while($data_outlet=mysqli_fetch_array($qry_outlet)){
																				echo '<option value="'.$data_outlet['id_outlet'].'">'.$data_outlet['nama'].' | '.$data_outlet['alamat'].'</option>';
																				}
																				?>
																	</select>
                                                    			</div>
															</div>
														</div>
													</div>
                                                    

													<div class="mb-3">
														<label class="form-label" for="" >Kode Transaksi</label>
                            							<input id="kode_transaksi" name="kode_transaksi" class="form-control w-50" type="text" value="<?php echo "TR-" . generateTransactionCode() ?>" readonly>
													</div>

													<div class="mb-3">
                                                    	<label for="exampleInputEmail1" class="form-label">Nama Member</label>
                                                                        <select name="id_member" class="form-control">
                                                                        <option></option>
                                                                        
                                                                        <?php
                                                                        include "koneksi.php";
                                                                        $qry_member=mysqli_query($conn,"select * from member");
                                                                        while($data_member=mysqli_fetch_array($qry_member)){
                                                                            echo '<option value="'.$data_member['id_member'].'">'.$data_member['nama_member'].'</option>';
                                                                        }
                                                                        ?>
                                                                        </select>
                                                    </div>
													
                                                    <div class="mb-3">
														<label for="exampleInputEmail1" class="form-label">Tanggal Order</label>
														<input type="date" name="tgl" class="form-control">
                                                    </div>
                                                    <div class="mb-3">
														<label for="exampleInputEmail1" class="form-label">Batas Waktu</label>
														<input type="date" name="batas_waktu" class="form-control">
                                                   
													<div class="mb-3">
                                                    	<label for="exampleInputEmail1" class="form-label">Nama Petugas</label>
                                                                        <select name="id_user" class="form-control">
                                                                        <option></option>
                                                                        
                                                                        <?php
                                                                        include "koneksi.php";
                                                                        $qry_user=mysqli_query($conn,"select * from user");
                                                                        while($data_user=mysqli_fetch_array($qry_user)){
                                                                            echo '<option value="'.$data_user['id_user'].'">'.$data_user['nama_user'].' | '.$data_user['role'].'</option>';
                                                                        }
                                                                        ?>
                                                                        </select>
                                                    </div>

													 

													<div class="mb-3">
                                                    	<label for="exampleInputEmail1" class="form-label">Status Order</label>
                                                    	<input type="text" name="status" class="form-control">
                                                    </div>
													<div class="mb-3">
                                                    	<label for="exampleInputEmail1" class="form-label">Status Bayar</label>
                                                    	<input type="text" name="dibayar" class="form-control">
                                                    </div>


													<div class="mb-3">
                                                    	<label for="exampleInputEmail1" class="form-label">Nama Paket</label>
                                                                        <select name="id_paket" class="form-control">
                                                                        <option></option>
                                                                        
                                                                        <?php
                                                                        include "koneksi.php";
                                                                        $qry_paket=mysqli_query($conn,"select * from paket");
                                                                        while($data_paket=mysqli_fetch_array($qry_paket)){
                                                                            echo '<option value="'.$data_paket['id_paket'].'">'.$data_paket['nama_paket'].' </option>';
                                                                        }
                                                                        ?>
                                                                        </select>
                                                    </div>



                                                    <br>
                                                    <div>
                                                        <input type="submit" name="simpan" value="Tambah Transaksi" class="btn btn-primary">
                                                    </div>
                                                </section>
                                                </form>
                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div> -->
                                            </div>
                                            
                                                </div>
                                            </div>
                                                                
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                            <!--end::Modal content-->
                                        </div>
                                        <!--end::Modal dialog-->
                                    </div>
                                    <!--end::Modal - New Target-->
                                    <!--end::Modals-->
										</div>
										<!--end::Wrapper-->
									</div>
									<!--end::Actions-->
								</form>
								<!--end::Form-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Stepper-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Create App-->
		<!--end::Modals-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="assets/plugins/custom/fslightbox/fslightbox.bundle.js"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="assets/js/custom/widgets.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>