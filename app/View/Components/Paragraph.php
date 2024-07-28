<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Paragraph extends Component
{
    public $type;

    const TEXTS = [
        'berita1' => 'BUMDes Adhinata Mandiri Kedungudi - It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
        'berita2' => 'BUMDes Adhinata Mandiri Kedungudi - Pada hari Rabu, 17 Juli 2024, Desa Kedungudi menggelar acara penanaman pohon bersama dalam rangka memperingati World Environment Day. Kegiatan ini dilakukan di area persawahan belakang Sky Park Hill (SPH). Acara ini merupakan kerja sama antara berbagai pihak, termasuk PT BETTS Indonesia, RT, RW, Karang Taruna, BUMDes, perangkat desa, dan mahasiswa KKN. PT BETTS Indonesia berperan sebagai penyedia bibit pohon untuk acara ini, dengan jenis pohon yang ditanam meliputi alpukat, durian, rambutan, dan jambu crystal. Kegiatan ini bertujuan untuk meningkatkan kesadaran masyarakat akan pentingnya menjaga lingkungan serta memberikan kontribusi nyata dalam pelestarian alam',
        'berita3' => 'BUMDes Adhinata Mandiri Kedungudi - It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
        'berita4' => 'BUMDes Adhinata Mandiri Kedungudi - It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
        'berita5' => 'BUMDes Adhinata Mandiri Kedungudi - It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
        'berita6' => 'BUMDes Adhinata Mandiri Kedungudi - It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using',
        // Add more texts here as needed
    ];

    public function __construct($type)
    {
        $this->type = $type;
    }

    public function render()
    {
        return view('components.paragraph', ['text' => self::TEXTS[$this->type]]);
    }
}