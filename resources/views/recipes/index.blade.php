@extends('layouts.app')

@section('content')
<div class="page recipe-list">

    <div class="recipe-grid">
        @php
            $recipes = [
                ['title'=>'Ayam Rica-Rica','slug'=>'ayam-rica-rica','time'=>'45 Menit','serve'=>'6 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125515-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Opor Ayam','slug'=>'opor-ayam','time'=>'60 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/230519-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tumis Kangkung','slug'=>'tumis-kangkung','time'=>'15 Menit','serve'=>'2 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/230520-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Nasi Kebuli','slug'=>'nasi-kebuli','time'=>'90 Menit','serve'=>'6 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/230922-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Soto Ayam','slug'=>'soto-ayam','time'=>'60 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125763-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Sayur Lodeh','slug'=>'sayur-lodeh','time'=>'40 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/230915-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Sop Buntut','slug'=>'sop-buntut','time'=>'120 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125214-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tumis Sapi Saos Bawang','slug'=>'tumis-sapi-saus-bawang','time'=>'30 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125570-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Rawon Daging Sapi','slug'=>'rawon-daging-sapi','time'=>'90 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125611-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Sup Tomat Daging Asap','slug'=>'sup-tomat-daging-asap','time'=>'35 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125641-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],

                ['title'=>'Iga Konro Bakar','slug'=>'iga-konro-bakar','time'=>'120 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125014-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Bakwan Oncom Renyah','slug'=>'bakwan-oncom-renyah','time'=>'30 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125004-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tahu Tempe Endes','slug'=>'tahu-tempe-endes','time'=>'25 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125717-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tempe Asem Pedas','slug'=>'tempe-asem-pedas','time'=>'30 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125730-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tempe Mendoan','slug'=>'tempe-mendoan','time'=>'20 Menit','serve'=>'4 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/207335-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tempe Bakar Sambal Kemangi','slug'=>'tempe-bakar-sambal-kemangi','time'=>'35 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/208273-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tumis Tempe','slug'=>'tumis-tempe','time'=>'20 Menit','serve'=>'2 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/230521-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tumis Pakcoy Saus Kepiting','slug'=>'tumis-pakcoy-saus-kepiting','time'=>'25 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125531-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Brokoli Saus Jamur','slug'=>'brokoli-saus-jamur','time'=>'25 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125581-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tumis Kailan Bawang Putih','slug'=>'tumis-kailan-bawang-putih','time'=>'20 Menit','serve'=>'2 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125647-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],

                ['title'=>'Sup Krim Ayam Istimewa','slug'=>'sup-krim-ayam-istimewa','time'=>'30 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125690-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Tumis Tahu Hijau','slug'=>'tumis-tahu-hijau','time'=>'25 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125720-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Cumi Krispi Cocol Madu','slug'=>'cumi-krispi-cocol-madu','time'=>'25 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125699-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Nasi Goreng Cumi','slug'=>'nasi-goreng-cumi','time'=>'20 Menit','serve'=>'2 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125733-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Telur Gembung','slug'=>'telur-gembung','time'=>'15 Menit','serve'=>'2 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125615-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Risoles Ayam Telur Asin','slug'=>'risoles-ayam-telur-asin','time'=>'60 Menit','serve'=>'5 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125634-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Makaroni Keju','slug'=>'makaroni-keju','time'=>'30 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125548-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Nasi Goreng Spicy','slug'=>'nasi-goreng-spicy','time'=>'20 Menit','serve'=>'2 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125572-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Ifumie Saos Jamur','slug'=>'ifumie-saus-jamur','time'=>'35 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125588-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
                ['title'=>'Ikan Goreng Telur Asin','slug'=>'ikan-goreng-telur-asin','time'=>'35 Menit','serve'=>'3 Orang','img'=>'https://assets.unileversolutions.com/recipes-v3/125541-default.jpg?im=AspectCrop=(720,459);Resize=(720,459)'],
            ];
        @endphp

        @foreach ($recipes as $recipe)
            <a href="{{ route('recipes.show', $recipe['slug']) }}" class="recipe-card">
                <img src="{{ $recipe['img'] }}" class="recipe-img" alt="{{ $recipe['title'] }}" loading="lazy">

                <div class="recipe-name">{{ $recipe['title'] }}</div>

                <div class="recipe-meta">
                    <span>⏱ {{ $recipe['time'] }}</span>
                    <span>👤 {{ $recipe['serve'] }}</span>
                </div>
            </a>
        @endforeach
    </div>

</div>
@endsection
