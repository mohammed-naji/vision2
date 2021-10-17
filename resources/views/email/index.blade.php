<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        /* @import url('https://fonts.googleapis.com/css2?family=Tajawal&display=swap'); */
        @import url('https://fonts.googleapis.com/css2?family=Amiri:ital@1&display=swap');

        body {
            direction: rtl;
            text-align: right;
            /* font-family: 'Tajawal', sans-serif; */
            font-family: 'Amiri', serif;
        }

    </style>
</head>
<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-6">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $e)
                            <p>{{ $e }}</p>
                        @endforeach
                    </div>
                @endif

                <h2>اتصل بنا</h2>
                <form method="post" actisson="{{ route('emailurl') }}">
                    @csrf
                    <div class="mb-3">
                        <input type="text" class="form-control" name="name" placeholder="الاسم" />
                    </div>
                    {{-- <input type="password" name="password" placeholder="Password" /> --}}
                    <div class="mb-3">
                        <input type="email" class="form-control" name="email" placeholder="الايميل" />
                    </div>
                    <div class="mb-3">
                        <textarea name="message" class="form-control" placeholder="الرسال"></textarea>
                    </div>
                    <button class="btn btn-success">ارسال</button>
                </form>
            </div>
            <div class="col-6">
                هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق.
إذا كنت تحتاج إلى عدد أكبر من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.
هذا النص يمكن أن يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.
                <img src="https://via.placeholder.com/500" alt="">
            </div>
        </div>
    </div>

</body>
</html>
