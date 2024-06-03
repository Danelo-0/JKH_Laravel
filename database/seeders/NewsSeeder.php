<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('news')->insert([
            [
                'title' => "Об окончании отопительного периода 2023 - 2024 гг.",
                'content' => "Уважаемые потребители жилищно - коммунальных услуг Октябрьского района!
                В связи с внесением изменений в Постановление Администрации Октябрьского района № 780 от 22 мая 2024 года 'Об окончании отопительного периода 2023 - 2024 гг.' МП МО Октябрьский район 'Объединенные коммунальные системы' информирует Вас о том, что окончание отопительного периода установлено:
                - для объектов жилищного фонда и прочих потребителей со дня, следующего за днем окончания пятидневного периода, в течение которого среднесуточная температура наружного воздуха выше +8'С, НО не ранее 05 июня 2024 года.",
                
            ],
    
            [
                'title' => 'Система водоотведения – не мусоропровод!!!',
                'content' => 'Что мы знаем о системе водоотведения жилых домов, или как ещё называют – систему канализации? Система водоотведения в многоквартирных и частных жилых домах, это коммуникации из чугунных или пластиковых труб, по средствам которых отводятся жидкие отходы жизнедеятельности человека. Но, к сожалению, у многих жильцов складывается впечатление, что систему жидких стоков можно использовать как мусоропровод. Бросают в канализацию тряпки, одежду, вату, картон, средства гигиены, бытовой и строительный мусор, крупные пищевые отходы, остатки еды и отходы ее приготовления и т. п. Этот самый мусор скапливается в колодцах и уменьшает проходимость канализационных труб и тем самым приводит к засорам. Устранение засора отработанный процесс у служб жилищно-коммунального хозяйства, безусловно, разная степень засорённости требует определённого времени, а вот последствия в виде запаха, элементов оставшихся отходов на поверхности, будут долго напоминать о себе и вносить дискомфорт в повседневную жизнь. Поэтому надёжная эксплуатация, срок службы системы, отсутствие засоров, вклад каждого жильца дома. Использовать систему водоотведения можно лишь по прямому назначению.
                Только выполняя эти простые правила, можно рассчитывать, что система водоотведения будет работать бесперебойно.',
            ],
        ]);
    }
}