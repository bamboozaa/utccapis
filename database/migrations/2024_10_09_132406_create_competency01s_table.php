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
        Schema::create('competency01s', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('dep_id');
            $table->string('section_id');
            $table->string('round');
            $table->integer('option1_1')->nullable()->comment('1.1 มีความคิดสร้างสรรค์ และยืดหยุ่น แสวงหาแนวคิดใหม่ๆ เพื่อปรับปรุงการทำงาน');
            $table->integer('option1_2')->nullable()->comment('1.2 มีใจเปิดกว้าง พร้อมที่จะเรียนรู้');
            $table->integer('option1_3')->nullable()->comment('1.3 คิดนอกกรอบ');
            $table->text('comment1')->nullable();
            $table->integer('option2_1')->nullable()->comment('2.1 แสดงออกซึ่งความรู้ในการปฏิบัติงานของตน');
            $table->integer('option2_2')->nullable()->comment('2.2 แสดงออกซึ่งทักษะในการปฏิบัติงานของตน');
            $table->integer('option2_3')->nullable()->comment('2.3 ใฝ่เรียนรู้เพื่อพัฒนาทักษะต่าง ๆ ให้เกิดความชำนาญ');
            $table->text('comment2')->nullable();
            $table->integer('option3_1')->nullable()->comment('3.1 ทำงานด้วยความถูกต้องและเชื่อถือได้');
            $table->integer('option3_2')->nullable()->comment('3.2 สามารถปฏิบัติงานเป็นผลสำเร็จและแสดงถึงความสามารถในการใช้ทรัพยากร (เช่น เวลา ค่าใช้จ่าย) อย่างมีประสิทธิผล');
            $table->text('comment3')->nullable();
            $table->integer('option4_1')->nullable()->comment('4.1 สามารถวางแผนการทำงาน จัดลำดับความสำคัญงานที่ได้รับมอบหมาย');
            $table->integer('option4_2')->nullable()->comment('4.2 สามารถปรับแนวทางการทำงานหรือปรับลำดับความสำคัญของงานได้ ในกรณีที่มีการเปลี่ยนแปลงในวัตถุประสงค์ของงานนั้น ๆ');
            $table->integer('option4_3')->nullable()->comment('4.3 สามารถปฏิบัติงานเป็นผลสำเร็จภายในเวลาที่กำหนดไว้');
            $table->text('comment4')->nullable();
            $table->integer('option5_1')->nullable()->comment('5.1 สามารถคลี่คลายประเด็นที่สำคัญ เมื่อเผชิญกับปัญหาในการทำงานที่ซับซ้อนได้');
            $table->integer('option5_2')->nullable()->comment('5.2 สามารถนำเสนอปัญหา พร้อมทั้งเสนอแนะแนวทางแก้ไข้ได้อย่างเป็นขั้นตอนและมีเหตุผล');
            $table->text('comment5')->nullable();
            $table->integer('option6_1')->nullable()->comment('6.1 รู้ว่าปัญหาคืออะไร มีความพยายามและกระตือรือร้นที่จะแก้ไขปัญหานั้น ๆ    มากกว่าหลีกเลี่ยงปัญหา');
            $table->integer('option6_2')->nullable()->comment('6.2 สามารถวิเคราะห์หาสาเหตุของปัญหา พร้อมทั้งสามารถนำเสนอข้อมูลและข้อเสนอแนะในการแก้ไขปัญหานั้น ๆ ได้');
            $table->text('comment6')->nullable();
            $table->integer('option7_1')->nullable()->comment('7.1 สามารถสื่อสารทั้งการพูดและเขียนได้อย่างชัดเจน ถูกต้อง และกระชับได้ใจความ');
            $table->integer('option7_2')->nullable()->comment('7.2 สามารถใช้สื่อต่าง ๆ ในการสื่อสารได้อย่างเหมาะสมกับสถานการณ์ เช่น การประชุม พบปะ การใช้อีเมล์ เป็นต้น');
            $table->integer('option7_3')->nullable()->comment('7.3 สามารถสื่อสารด้วยความมั่นใจ  (เช่น มีความพร้อมในด้านข้อมูล มีการเตรียมตัวและการจัดการที่ดี)');
            $table->text('comment7')->nullable();
            $table->integer('option8_1')->nullable()->comment('8.1 ช่วยเหลือซึ่งกันละกันภายในทีมงาน');
            $table->integer('option8_2')->nullable()->comment('8.2 สามารถสร้างเครือข่ายและแสดงไมตรีจิตกับเพื่อนร่วมงาน เพื่อปฏิบัติงานหนึ่งๆ ให้สำเร็จ');
            $table->integer('option8_3')->nullable()->comment('8.3 สุขุม รอบคอบในการคลี่คลายความคิดเห็นไม่ตรงกันหรือความขัดแย้งระหว่างเพื่อนร่วมงาน');
            $table->text('comment8')->nullable();
            $table->integer('option9_1')->nullable()->comment('9.1 คิดในเชิงบวก มีความรับผิดชอบในงานของตน');
            $table->integer('option9_2')->nullable()->comment('9.2 มีความกระตือรือร้นและทุ่มเทใจให้กับงานของตน');
            $table->integer('option9_3')->nullable()->comment('9.3 มีความคิดริเริ่ม');
            $table->text('comment9')->nullable();
            $table->integer('option10_1')->nullable()->comment('10.1 หมั่นพบลูกค้าเพื่อที่จะเข้าใจความต้องการ');
            $table->integer('option10_2')->nullable()->comment('10.2 แสวงหาแนวทางการปรับปรุงพัฒนาการให้บริการที่ได้นำเสนอ และปฏิบัติงานตามคำมั่นสัญญาที่ให้กับลูกค้า ทั้งภายในและภายนอก');
            $table->integer('option10_3')->nullable()->comment('10.3 สนองความต้องการของลูกค้าด้วยความรวดเร็ว พร้อมทั้งสามารถเสนอทางเลือกต่าง ๆ ในการแก้ไขปัญหาของลูกค้า ทั้งภายในและภายนอก');
            $table->text('comment10')->nullable();
            $table->integer('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('competency01s');
    }
};
