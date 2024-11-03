<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController; // Correct import for GameController

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/banner', function () {
    return view('banner');
});

Route::get('/menu', function () {
    return view('menu');
});

// routes/web.php
Route::get('/list_game', function () {
    return view('list_game');
});

Route::get('/list_pulsa', function () {
    return view('list_pulsa');
});

Route::get('/list_voucher', function () {
    return view('list_voucher');
});

Route::get('/list_liveapp', function () {
    return view('list_liveapp');
});

Route::get('/list_pln', function () {
    return view('list_pln');
});

Route::get('/Genshin_Impact', function () {
    return view('Genshin_Impact');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/pilih_nominal', function () {
    return view('pilih_nominal');
});
Route::get('/pilih_bayaran', function () {
    return view('pilih_bayaran');
});

Route::get('/Kode_promo', function () {
    return view('Kode_promo');
});
Route::get('/nomor_whatsapp', function () {
    return view('nomor_whatsapp');
});


Route::get('/Valorant', function () {
    return view('Valorant');
});

Route::get('/form_valorant', function () {
    return view('form_valorant');
});



Route::get('/Honkai', function () {
    return view('Honkai');
});

Route::get('/form_Honkai', function () {
    return view('form_Honkai');
});

Route::get('/Pubg', function () {
    return view('Pubg');
});

Route::get('/form_Pubg', function () {
    return view('form_Pubg');
});


Route::get('/Sausage_Man', function () {
    return view('Sausage_Man');
});

Route::get('/form_Sausage_Man', function () {
    return view('form_Sausage_Man');
});


Route::get('/view_pembayaran_Genshin', function () {
    return view('view_pembayaran_Genshin');
});

Route::get('/view_pembayaran_zepeto', function () {
    return view('view_pembayaran_zepeto');
});

Route::get('/view_pembayaran_Valorant', function () {
    return view('view_pembayaran_Valorant');
});

Route::get('/view_pembayaran_Honkai', function () {
    return view('view_pembayaran_Honkai');
});

Route::get('/view_pembayaran_PUBG', function () {
    return view('view_pembayaran_PUBG');
});

Route::get('/view_pembayaran_SausageMan', function () {
    return view('view_pembayaran_SausageMan');
});

Route::get('/view_pembayaran_Ragnarok', function () {
    return view('view_pembayaran_Ragnarok');
});

Route::get('/view_pembayaran_League', function () {
    return view('view_pembayaran_League');
});

Route::get('/view_pembayaran_SuperSus', function () {
    return view('view_pembayaran_SuperSus');
});

Route::get('/view_pembayaran_Arena', function () {
    return view('view_pembayaran_Arena');
});

Route::get('/view_pembayaran_DragonRaja', function () {
    return view('view_pembayaran_DragonRaja');
});
Route::get('/view_pembayaran_Undawn', function () {
    return view('view_pembayaran_Undawn');
});

Route::get('/view_pembayaran_cod', function () {
    return view('view_pembayaran_cod');
});

Route::get('/view_pembayaran_Lords', function () {
    return view('view_pembayaran_Lords');
});

Route::get('/view_pembayaran_Lifeafter', function () {
    return view('view_pembayaran_Lifeafter');
});

Route::get('/view_pembayaran_MARVEL', function () {
    return view('view_pembayaran_MARVEL');
});

Route::get('/view_pembayaran_TomandJerry', function () {
    return view('view_pembayaran_TomandJerry');
});

Route::get('/view_pembayaran_FIFA', function () {
    return view('view_pembayaran_FIFA');
});

Route::get('/view_pembayaran_Metal', function () {
    return view('view_pembayaran_Metal');
});

Route::get('/view_pembayaran_Eggy', function () {
    return view('view_pembayaran_Eggy');
});

Route::get('/view_pembayaran_OnePunchMan', function () {
    return view('view_pembayaran_OnePunchMan');
});

Route::get('/view_pembayaran_BLOODSTRIKE', function () {
    return view('view_pembayaran_BLOODSTRIKE');
});

Route::get('/view_pembayaran_LoveandDeepspace', function () {
    return view('view_pembayaran_LoveandDeepspace');
});

Route::get('/view_pembayaran_StumbleGuys', function () {
    return view('view_pembayaran_StumbleGuys');
});

Route::get('/view_pembayaran_AceRacer', function () {
    return view('view_pembayaran_AceRacer');
});

Route::get('/view_pembayaran_Rise', function () {
    return view('view_pembayaran_Rise');
});

Route::get('/view_pembayaran_Telkomsel', function () {
    return view('view_pembayaran_Telkomsel');
});

Route::get('/view_pembayaran_Indosat', function () {
    return view('view_pembayaran_Indosat');
});

Route::get('/view_pembayaran_Axis', function () {
    return view('view_pembayaran_Axis');
});

Route::get('/view_pembayaran_Three', function () {
    return view('view_pembayaran_Three');
});

Route::get('/view_pembayaran_XL', function () {
    return view('view_pembayaran_XL');
});

Route::get('/view_pembayaran_byU', function () {
    return view('view_pembayaran_byU');
});

Route::get('/view_pembayaran_Garena', function () {
    return view('view_pembayaran_Garena');
});

Route::get('/view_pembayaran_Unipin', function () {
    return view('view_pembayaran_Unipin');
});

Route::get('/view_pembayaran_Razer', function () {
    return view('view_pembayaran_Razer');
});

Route::get('/view_pembayaran_GooglePlay', function () {
    return view('view_pembayaran_GooglePlay');
});

Route::get('/view_pembayaran_Steam', function () {
    return view('view_pembayaran_Steam');
});

Route::get('/view_pembayaran_POINT', function () {
    return view('view_pembayaran_POINT');
});

Route::get('/view_pembayaran_Roblox', function () {
    return view('view_pembayaran_Roblox');
});

Route::get('/view_pembayaran_Maxim', function () {
    return view('view_pembayaran_Maxim');
});

Route::get('/view_pembayaran_token', function () {
    return view('view_pembayaran_token');
});

Route::get('/view_pembayaran_Mobile', function () {
    return view('view_pembayaran_Mobile');
});

Route::get('/view_pembayaran_FreeFire', function () {
    return view('view_pembayaran_FreeFire');
});

Route::get('/view_pembayaran_Honor', function () {
    return view('view_pembayaran_Honor');
});

Route::get('/view_pembayaran_Topup', function () {
    return view('view_pembayaran_Topup');
});

Route::get('/ragnarok', function () {
    return view('ragnarok');
});

Route::get('/form_ragnarok', function () {
    return view('form_ragnarok');
});


Route::get('/league', function () {
    return view('league');
});

Route::get('/form_league', function () {
    return view('form_leugue');
});


Route::get('/supersus', function () {
    return view('supersus');
});

Route::get('/form_supersus', function () {
    return view('form_supersus');
});

Route::get('/arena', function () {
    return view('arena');
});

Route::get('/form_arena', function () {
    return view('form_arena');
});

Route::get('/dragon', function () {
    return view('dragon');
});

Route::get('/form_dragon', function () {
    return view('form_dragon');
});

Route::get('/undawn', function () {
    return view('undawn');
});

Route::get('/form_undwan', function () {
    return view('form_undwan');
});

Route::get('/cod', function () {
    return view('cod');
});

Route::get('/form_cod', function () {
    return view('form_cods');
});

Route::get('/lordsmobile', function () {
    return view('lordsmobile');
});

Route::get('/form_lordsmobile', function () {
    return view('form_lordsmobile');
});

Route::get('/lifeaftercredits', function () {
    return view('lifeaftercredits');
});

Route::get('/form_lifeaftercredits', function () {
    return view('form_lifeaftercredits');
});

Route::get('/marvel', function () {
    return view('marvel');
});

Route::get('/form_marvel', function () {
    return view('form_marvel');
});

Route::get('/tomandjerry', function () {
    return view('tomandjerry');
});

Route::get('/form_tomandjerry', function () {
    return view('form_tomandjerry');
});

Route::get('/fifa', function () {
    return view('fifa');
});

Route::get('/form_fifa', function () {
    return view('form_fifa');
});


Route::get('/metal', function () {
    return view('metal');
});

Route::get('/form_metal', function () {
    return view('form_metal');
});

Route::get('/eggyparty', function () {
    return view('eggyparty');
});

Route::get('/form_eggyparty', function () {
    return view('form_eggyparty');
});


Route::get('/onepunchman', function () {
    return view('onepunchman');
});

Route::get('/form_onepunchman', function () {
    return view('form_onepunchman');
});

Route::get('/BLOODSTRIKE', function () {
    return view('BLOODSTRIKE');
});

Route::get('/form_BLOODSTRIKE', function () {
    return view('form_BLOODSTRIKE');
});

Route::get('/zepeto', function () {
    return view('zepeto');
});

Route::get('/form_zepeto', function () {
    return view('form_zepeto');
});

Route::get('/LoveandDeepspace', function () {
    return view('LoveandDeepspace');
});

Route::get('/form_LoveandDeepspace', function () {
    return view('form_LoveandDeepspace');
});

Route::get('/StumbleGuys', function () {
    return view('StumbleGuys');
});

Route::get('/form_StumbleGuys', function () {
    return view('form_StumbleGuys');
});

Route::get('/AceRacer', function () {
    return view('AceRacer');
});

Route::get('/form_AceRacer', function () {
    return view('form_AceRacer');
});

Route::get('/RiseofKingdom', function () {
    return view('RiseofKingdom');
});

Route::get('/form_RiseofKingdom', function () {
    return view('form_RiseofKingdom');
});

Route::get('/telkomsel', function () {
    return view('telkomsel');
});

Route::get('/form_telkomsel', function () {
    return view('form_telkomsel');
});

Route::get('/indosat', function () {
    return view('indosat');
});

Route::get('/form_indosat', function () {
    return view('form_indosat');
});

Route::get('/axis', function () {
    return view('axis');
});

Route::get('/form_axis', function () {
    return view('form_axis');
});

Route::get('/three', function () {
    return view('three');
});

Route::get('/form_three', function () {
    return view('form_three');
});

Route::get('/Xl', function () {
    return view('Xl');
});

Route::get('/form_xl', function () {
    return view('form_xl');
});

Route::get('/byU', function () {
    return view('byU');
});

Route::get('/form_byU', function () {
    return view('form_byU');
});

Route::get('/garena', function () {
    return view('garena');
});

Route::get('/form_garena', function () {
    return view('form_garena');
});

Route::get('/unipin', function () {
    return view('unipin');
});

Route::get('/form_unipin', function () {
    return view('form_unipin');
});

Route::get('/RazerGold ', function () {
    return view('RazerGold');
});

Route::get('/form_RazerGold', function () {
    return view('form_RazerGold');
});

Route::get('/GooglePlay', function () {
    return view('GooglePlay');
});

Route::get('/form_GooglePlay', function () {
    return view('form_GooglePlay');
});

Route::get('/steam', function () {
    return view('steam');
});

Route::get('/form_steam', function () {
    return view('form_steam');
});

Route::get('/POINTBLANK', function () {
    return view('POINTBLANK');
});

Route::get('/form_POINTBLANK', function () {
    return view('form_POINTBLANK');
});

Route::get('/Roblox', function () {
    return view('Roblox');
});

Route::get('/form_Roblox', function () {
    return view('form_Roblox');
});

Route::get('/maxim', function () {
    return view('maxim');
});

Route::get('/form_maxim', function () {
    return view('form_maxim');
});

Route::get('/pln', function () {
    return view('pln');
});

Route::get('/form_pln', function () {
    return view('form_pln');
});

Route::get('/populer', function () {
    return view('populer');
});

Route::get('/mobile_legends', function () {
    return view('mobile_legends');
});

Route::get('/form_mobile', function () {
    return view('form_mobile');
});

Route::get('/free_fire', function () {
    return view('free_fire');
});

Route::get('/form_freefire', function () {
    return view('form_freefire');
});

Route::get('/HonorOFKings', function () {
    return view('HonorOFKings');
});

Route::get('/form_HonorOFKings', function () {
    return view('form_HonorOFKings');
});

Route::get('/Topup_JokiGame', function () {
    return view('Topup_JokiGame');
});

Route::get('/form_TopupJokiGame', function () {
    return view('form_TopupJokiGame');

});

Route::get('/semua_game', function () {
    return view('semua_game');

});

Route::get('/home_game', function () {
    return view('home_game');

});

Route::get('/daftar_harga', function () {
    return view('daftar_harga');

});

Route::get('/home_harga', function () {
    return view('home_harga');

});

Route::get('/lacak_pesanan', function () {
    return view('lacak_pesanan');

});

Route::get('/home_lacak', function () {
    return view('home_lacak');

});

Route::get('/Winrate', function () {
    return view('Winrate');

});

Route::get('/home_winrate', function () {
    return view('home_winrate');

});

Route::get('/Magic', function () {
    return view('Magic');

});

Route::get('/home_magic', function () {
    return view('home_magic');

});

Route::get('/zodiac', function () {
    return view('zodiac');

});

Route::get('/home_zodiac', function () {
    return view('home_zodiac');

});

Route::get('/home', function () {
    return view('home');

});

Route::get('/login', function () {
    return view('login');

});

Route::get('/register', function () {
    return view('register');

});

Route::get('/lupa_sandi', function () {
    return view('lupa_sandi');

});

Route::get('/home1', function () {
    return view('home1');

});

Route::get('/dasboard', function () {
    return view('dasboard');

});

Route::get('/deposit', function () {
    return view('deposit');

});

Route::get('/home_dasboard', function () {
    return view('home_dasboard');

});

Route::get('/home_deposit', function () {
    return view('home_deposit');

});

Route::get('/edit_profil', function () {
    return view('edit_profil');

});

Route::get('/home_editprofil', function () {
    return view('home_editprofil');

});


Route::get('/upgrade', function () {
    return view('upgrade');

});

Route::get('/home_upgrade', function () {
    return view('home_upgrade');

});