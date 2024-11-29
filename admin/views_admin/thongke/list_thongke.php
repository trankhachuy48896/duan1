<?php include_once "views_admin/header_admin.php" ?>


<main class="content">
    <h2>Thống kê</h2>
    <div class="bieu_do_tron">
        <div id="myPlot" style="width:100%;max-width:700px"></div>

        <script>
            const xArray = ["Văn học", "Tâm lý-Kĩ năng sống", "Kinh tế", "Nuôi dạy con", "Sách thiếu nhi", "Sách giáo khoa-tham khảo"];
            const yArray = [55, 49, 44, 24, 15, 10];

            const layout = {
                title: "Biểu đồ danh mục"
            };

            const data = [{
                labels: xArray,
                values: yArray,
                type: "pie"
            }];

            Plotly.newPlot("myPlot", data, layout);
        </script>
    </div>

    <div class="bieu_do_cot">
        <canvas id="myChart" style="width:100%;max-width:600px"></canvas>

        <script>
            const xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
            const yValues = [55, 49, 44, 24, 15];
            const barColors = ["red", "green", "blue", "orange", "brown"];

            new Chart("myChart", {
                type: "bar",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: "World Wine Production 2018"
                    }
                }
            });
        </script>
    </div>
</main>

<?php include_once "views_admin/footer_admin.php" ?>