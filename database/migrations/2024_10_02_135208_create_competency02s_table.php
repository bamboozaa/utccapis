<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('competency02s', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('department');
            $table->string('round');
            $table->integer('option1_1')->nullable()->comment('1.1 สามารถใช้ความชำนาญในการพัฒนาการทำงานของตนเอง');
            $table->integer('option1_2')->nullable()->comment('1.2 สามารถแสดงความคิดเห็นหรือคำแนะนำในงานได้อย่างน่าเชื่อถือ');
            $table->integer('option1_3')->nullable()->comment('1.3 เต็มใจแบ่งปันและถ่ายทอดความรู้');
            $table->text('comment1')->nullable();
            $table->integer('option2-1')->nullable()->comment('2.1 สามารถลงมือปฏิบัติงานตามแผนงานได้อย่างสำเร็จ');
            $table->integer('option2-2')->nullable()->comment('2.2 สามารถระบุประเด็นปัญหาและสาเหตุพร้อมทั้งสามารถนำเสนอแนวทางการแก้ไขปัญหานั้นๆ ได้');
            $table->integer('option2-3')->nullable()->comment('2.3 มีความกระตือรือร้นและมุ่งมั่นที่จะทำงานให้สำเร็จอย่างสม่ำเสมอ');
            $table->text('comment2')->nullable();
            $table->integer('option3-1')->nullable()->comment('3.1 สามารถวิเคราะห์ความต้องการของผู้บริหาร และลูกค้า ทุกระดับ (ทั้งภายในและภายนอก)');
            $table->integer('option3-2')->nullable()->comment('3.2 สามารสร้างและรักษาความสัมพันธ์ที่ดีกับผู้บริหารและลูกค้าทุกระดับ เพื่อให้สามารถตอบสนองความต้องการ ตลอดจนเพื่อสร้างความน่าเชื่อถือและไว้วางใจซึ่งกันและกัน');
            $table->integer('option3-3')->nullable()->comment('3.3 แสวงหาแนวทางการปรับปรุงพัฒนา การให้บริการที่ได้นำเสนออย่างต่อเนื่อง');
            $table->text('comment3')->nullable();
            $table->integer('option4-1')->nullable()->comment('4.1 สามารถสื่อสารทั้งการพูดและเขียนได้อย่างชัดเจน ถูกต้องและกระชับได้ความ');
            $table->integer('option4-2')->nullable()->comment('4.2 สามารถใช้สื่อต่างๆ ในการสื่อสารได้อย่างเหมาะสมกับสถานการณ์เช่น การประชุม พบปะ อีเมล์ เป็นต้น');
            $table->integer('option4-3')->nullable()->comment('4.3 สามารถสื่อสารด้วยความมั่นใจ (เช่น มีความพร้อมในด้านข้อมูล มีการเตรียมตัวและการจัดการที่ดี)');
            $table->text('comment4')->nullable();
            $table->integer('option5-1')->nullable()->comment('5.1 สามารถส่งเสริมและผลักดันให้เกิดการพัฒนาปรับเปลี่ยนแนวทางการทำงานให้ดีขึ้น');
            $table->integer('option5-2')->nullable()->comment('5.2 เปิดใจยอมรับ และมีความยืดหยุ่นต่อการเปลี่ยนแปลง');
            $table->integer('option5-3')->nullable()->comment('5.3 ให้การสนับสนุนด้านทรัพยากร แก้ไขปัญหาและอุปสรรค พร้อมทั้งแสดงบทบาทในฐานะเป็นผู้ประสานงาน สำหรับการเปลี่ยนแปลง');
            $table->text('comment5')->nullable();
            $table->integer('option6-1')->nullable()->comment('6.1 สามารถแสดงออกซึ่งความรอบรู้ในธุรกิจของมหาวิทยาลัย และทักษะที่ต้องการในการดำเนินธุรกิจ ตั้งแต่การวางแผน ติดต่อสื่อสาร และการปฏิบัติงานตามแผน');
            $table->integer('option6-2')->nullable()->comment('6.2 สามารถนำเสนอความคิดสร้างสรรค์ พร้อมทั้งสามารถมองเห็นโอกาสทางธุรกิจและแนวทางในการปรับปรุงงานได้');
            $table->integer('option6-3')->nullable()->comment('6.3 สามารถมองเห็นภาพรวมของความสัมพันธ์ขององค์ประกอบต่างๆ ทางธุรกิจได้ (เช่น เข้าและวิเคราะห์ผลกระทบทางธุรกิจในลักษณะของแผนปฏิบัติงานหรือข้อเสนอแนะ)');
            $table->text('comment6')->nullable();
            $table->integer('option7-1')->nullable()->comment('7.1 สามารถกำหนดแผนระยะยาว (เช่น วัตถุประสงค์ของแผน เป้าหมาย) ให้ความสำคัญกับการทำให้ปัจจัยที่ได้รับผลกระทบมากที่สุดประสบความสำเร็จ');
            $table->integer('option7-2')->nullable()->comment('7.2 ใช้ทรัพยากรได้อย่างมีประสิทธิภาพและประสิทธิผลในการปฏิบัติงานตามโครงการหรือตามแผน');
            $table->integer('option7-3')->nullable()->comment('7.3 วางแผนตารางการทำงานที่สอดคล้องกัลสถานการณ์จริง พร้อมติดตามผลและปรับเปลี่ยนให้เหมาะสมกับสถาณการณ์ที่เปลี่ยนแปลงไป');
            $table->text('comment7')->nullable();
            $table->integer('option8-1')->nullable()->comment('8.1 พิจารณาทบทวนผลงานของสมาชิกในทีม พร้อมทั้งชี้แจงสมาชิกทราบถึงความสำเร็จ');
            $table->integer('option8-2')->nullable()->comment('8.2 ฝึกสอนและพัฒนาพนักงานให้มีความรู้และทักษะที่จำเป็นในการทำงาน');
            $table->integer('option8-3')->nullable()->comment('8.3 พยายามสร้างและนำศักยภาพในตัวพนักงานมาใช้อย่างเต็มที่');
            $table->text('comment8')->nullable();
            $table->integer('option9-1')->nullable()->comment('9.1 จัดการกับปัญหาทันที สามารถคลี่คลายวิกฤติการณ์ พร้อมทั้งสามารถวิเคราะห์สาเหตุของปัญหา');
            $table->integer('option9-2')->nullable()->comment('9.2 รวบรวมข้อมูลและการนำเสนอแนวทางการแก้ไขปัญหาอย่างเป็นขั้นตอน');
            $table->integer('option9-3')->nullable()->comment('9.3 สามารถตัดสินใจและพร้อมรับผิดชอบต่อการกระทำหรือการตัดสินใจของตนเอง');
            $table->text('comment9')->nullable();
            $table->integer('option10-1')->nullable()->comment('10.1 สามารถโน้มน้าวให้เกิดการปฏิบัติโดยมีหลักการและเหตุผล');
            $table->integer('option10-2')->nullable()->comment('10.2 สามารถนำเสนอความคิดของตนเองและโน้มน้าวให้เกิดการปฏิบัติร่วมกัน  สามารถแสดงความเห็นที่อาจไม่ตรงกับผู้อื่น โดยไม่ได้มุ่งเน้นการโจมตีหรือให้ร้ายผู้ปฏิบัติงาน');
            $table->integer('option10-3')->nullable()->comment('10.3 สามารถปฏิบัติงานให้สำเร็จโดยที่แต่ละฝ่ายที่เกี่ยวข้องได้ประโยชน์ และสามารถรักษาความสัมพันธ์อันดีไว้ แสดงความสามารถในการควบคุมการคลี่คลายความขัดแย้งต่างๆ');
            $table->text('comment10')->nullable();
            $table->integer('option11-1')->nullable()->comment('11.1 สามารถอำนวยการและประสานงานให้สมาชิกในทีมงานมีส่วนร่วมในการกำหนดเป้าหมาย การวางแผนการปฏิบัติงาน ตลอดจนตัดสินใจร่วมกัน');
            $table->integer('option11-2')->nullable()->comment('11.2 สามารถแสดงบทบาทในฐานะสมาชิกในทีมหรือหัวหน้าทีมได้ดี เช่น การแสดงความคิดเห็น การสนับสนุนสมาชิกคนอื่นๆ ภายในทีมงาน');
            $table->integer('option11-3')->nullable()->comment('11.3 สามารถสื่อสาร ให้คำแนะนำและให้ความช่วยเหลือ เพื่อให้เกิดความปรองดองกันภายในทีมงาน');
            $table->integer('option11-4')->nullable()->comment('11.4 พยายามทำงานร่วมกับผู้อื่นอย่างใกล้ชิด เพื่อแบ่งปันข้อมูลในการทำงานซึ่งกันและกัน');
            $table->text('comment11')->nullable();
            $table->integer('option12-1')->nullable()->comment('12.1 สามารถจัดการกับสถาณการณ์ที่บีบคั้นหรือเคร่งครัดด้วยความสุขุมและมั่นใจ');
            $table->integer('option12-2')->nullable()->comment('12.2 สามารถควบคุมหรือระงับอารมณ์ของตนเองได้');
            $table->integer('option12-3')->nullable()->comment('12.3 พิจารณาทางเลือกเชิงบวกอื่นๆ ได้ เมื่อเผชิญหน้ากับวิกฤตการณ์');
            $table->text('comment12')->nullable();
            $table->integer('option13-1')->nullable()->comment('13.1 กำหนดมาตรฐานการทำงานของตนและสามารถปฏิบัติได้');
            $table->integer('option13-2')->nullable()->comment('13.2 แสดงความกระตือรือร้นและพร้อมที่จะเรียนรู้สิ่งใหม่ๆ');
            $table->integer('option13-3')->nullable()->comment('13.3 แสดงความตั้งใจที่จะพัฒนาตนเอง');
            $table->text('comment13')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competency02s');
    }
};
