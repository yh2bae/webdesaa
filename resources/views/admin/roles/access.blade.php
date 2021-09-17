@if(user_akses2('roles',Session()->get('level'))->view ?? 0 =='1')

@extends('admin.layout.base')


@section('head-title')
<title>Desa {{ $desa->nama_desa }} - Role Akses</title>
@endsection

@section('breadcrumb')
<a class="breadcrumb-item " href="{{ route('role.index') }}"><span>Role</span></a>
<li class="breadcrumb-item active" aria-current="page"><span>Role Akses</span></li>
@endsection


@section('content')
<div class="row layout-top-spacing">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12 layout-spacing">
        <div class="widget widget-content-area br-4">
            <h4><strong>Role Akses {{ $role->name_role }}</strong></h4>
            <div class="widget-one">    

                <form action="{{ route('role.proses') }}" enctype="multipart/form-data" method="post"
                    accept-charset="utf-8">
                    {{ csrf_field() }}
                    <input type="hidden" name="id_role" value="{{ $role->id_role }}">
                    <?php

                    echo"<table class='table table-striped table-bordered table-sm'>
                    <thead>
                    <tr>
                    <th class='center' width='5%'>No</th>
                    <th>Nama Modul</th>
                    <th width='10%' class='center'>View</th>
                    <th width='10%' class='center'>Input</th>
                    <th width='10%' class='center'>Edit</th>
                    <th width='10%' class='center'>Delete</th>
                    <th width='10%' class='center'>Posting</th>
                    </tr>
                    </thead>
                    <tbody>"; 

                    $no=1;

                    foreach ($modul as $m){

                        $id_role = $role->id_role;
                        $name_modul = $m->name_modul;
                        $id_modul = $m->id_modul;


                        $id_ubah_saja = array("3");
                        $id_view_delete = array("xx");
                        $id_view_saja = array("13","20","26");
                        $id_full_previlage = array("2");	

                        if (in_array($id_modul,$id_ubah_saja)){
                            echo "<tr>
                            <td class='center'>$no</td>
                            <td>$name_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
                            <td class='center'></td>
                            <td class='center'></td>

                        <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->update ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='update-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='update-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>


                            <td class='center'></td>
                            <td class='center'></td>
                            </tr>";	
                        } else if (in_array($id_modul,$id_view_delete)){
                            echo "<tr>
                            <td class='center'>$no</td>
                            <td>$name_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            
                            
                            
                            if (($cek->view ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='1' checked class=''/>";
                        
                        } else {

                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>



                            <td class='center'></td>
                            <td class='center'></td>


                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->delete ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='delete-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='delete-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>
                            <td class='center'><label class='pos-rel'></td>
                            </tr>";	
                        } else if (in_array($id_modul,$id_view_saja)){
                            echo "<tr>
                            <td class='center'>$no</td>
                            <td>$name_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            
                            
                            
                            if (($cek->view ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='1' checked class=''/>";
                        
                        } else {

                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>



                            <td class='center'></td>
                            <td class='center'></td>
                            <td class='center'></td>
                            <td class='center'><label class='pos-rel'></td>
                            </tr>";	
                        }

                        else if (in_array($id_modul,$id_full_previlage)){
                            echo "<tr>
                            <td class='center'>$no</td>
                            <td>$name_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            
                            if (($cek->view ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='1' checked class=''/>";
                        
                        } else {

                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>



                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->input ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='input-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='input-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>

                        <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->update ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='update-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='update-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>


                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->delete ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='delete-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='delete-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>
                            
                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if ($cek->posting ?? '0' =='1'){
                            echo"<input class='ace' type='checkbox' name='posting-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='posting-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>
                            </tr>";	
                            
                        }
                        else 
                        {
                            echo "<tr>
                            <td class='center'>$no</td>
                            <td>$name_modul  <input type='hidden' name='modul[]' value='$id_modul'/></td>
                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            
                            
                            
                            if (($cek->view ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='1' checked class=''/>";
                        
                        } else {

                            echo"<input class='ace' type='checkbox' name='view-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>



                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->input ?? '0')=='1'){	
                            echo"<input class='ace' type='checkbox' name='input-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='input-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>

                        <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->update ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='update-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='update-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>


                            <td class='center'><label class='pos-rel'>";
                            $cek = user_akses($id_modul,$id_role);
                            if (($cek->delete ?? '0')=='1'){
                            echo"<input class='ace' type='checkbox' name='delete-$id_modul' values='1' checked>";
                            } else {

                            echo"<input class='ace' type='checkbox' name='delete-$id_modul' values='0'>";
                            }
                            echo"<span class='lbl'></span></label></td>
                            <td class='center'><label class='pos-rel'></td>
                            </tr>";	
                        }
                        
                        $no++;
                    }
                    echo "</tbody>
                    </table>";

                    echo'<div>
                            <div class="row">
                                <div class="col-md-12 col-lg-12">
                                    <button class="btn btn-sm btn-primary float-right " type="submit" name="submit"> Simpan</button>    
                                </div>    
                            </div>
                        </div>
                    
                        ';
                    echo"</form>";

                    ?>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection

@endif