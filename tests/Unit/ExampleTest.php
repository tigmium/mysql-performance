<?php

namespace Tests\Unit;

use App\UserDetail;
use DB;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp(); // TODO: Change the autogenerated stub

        DB::enableQueryLog();
    }

    public function tearDown(): void
    {
        $log = print_r(DB::getQueryLog(), true);

        parent::tearDown(); // TODO: Change the autogenerated stub

        self::output($log);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {

        $benchmark = new \Lavoiesl\PhpBenchmark\Benchmark();
        $benchmark->setCount(1);

//        $benchmark->add('index有り5万件', function () {
//            /*
//             * 1755ms
//             */
//            User::query()
//                ->where('type_kind_2_index', 1)
//                ->get();
//        });
//        $benchmark->add('index有り1万件', function () {
//            /*
//             * 8850ms
//             */
//            User::query()
//                ->where('type_kind_10_index', 1)
//                ->get();
//        });
//        $benchmark->add('index有り1万件のうち先頭10件', function () {
//            /*
//             * 326ms
//             */
//            User::query()
//                ->where('type_kind_10_index', 1)
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('where無しoffsetは早い？', function () {
//            /*
//             * 2319ms
//             */
//            User::query()
//                ->offset(99990)
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('複合where', function () {
//            /*
//             * 1852ms
//             */
//            User::query()
//                ->where('type_kind_10_index', 1)
//                ->where('type_kind_2_index', 1)
//                ->get();
//        });
//        $benchmark->add('user一人', function () {
//            /*
//             * 3ms
//             */
//            User::query()
//                ->where('id', 50000)
//                ->get();
//        });
//        $benchmark->add('detailをwhereHas', function () {
//            /*
//             * 604ms
//             */
//            User::whereHas('details', function($q) {
//                $q->where('seq_index', 50000);
//            })
//                ->get();
//        });
//        $benchmark->add('detailをjoin', function () {
//            /*
//             * 6ms
//             */
//            User::join('user_details', 'users.id', '=', 'user_details.user_id')
//                ->where('user_details.seq_index', 50000)
//                ->get();
//        });
//        $benchmark->add('detailをwith', function () {
//            /*
//             * 7ms
//             */
//            User::where('id', 50000)
//                ->with('details')
//                ->get();
//        });
//        $benchmark->add('detailをnot nullで絞り込み', function () {
//            /*
//             * 89ms
//             */
//            UserDetail::whereNotNull('nullable_a')
//                ->offset(40000) // offsetに比例して処理時間が増えていく
//                ->take(10)
//                ->get();
//            // TODO: indexあり版
//        });
//        $benchmark->add('nullableなカラムをnot nullで絞り込み', function () {
//            /*
//             * 89ms
//             */
//            UserDetail::whereNotNull('nullable_a')
//                ->offset(40000) // offsetに比例して処理時間が増えていく
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('nullableな2カラムをnot nullで絞り込み', function () {
//            /*
//             * 121ms
//             */
//            UserDetail::whereNotNull('nullable_a')
//                ->whereNotNull('nullable_b')
//                ->offset(16657)// offsetに比例して処理時間が増えていく
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('nullable&indexedなカラムをnot nullで絞り込み', function () {
//            /*
//             * 89ms
//             * 選択率が低く、インデックスが使われないため遅い
//             */
//            UserDetail::whereNotNull('nullable_a_index')
//                ->offset(40000) // offsetに比例して処理時間が増えていく
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('nullable&indexedな2カラムをnot nullで絞り込み', function () {
//            /*
//             * 121ms
//             * 選択率が低く、インデックスが使われないため全件検索になり遅い
//             */
//            UserDetail::whereNotNull('nullable_a_index')
//                ->whereNotNull('nullable_b_index')
//                ->offset(16657)// offsetに比例して処理時間が増えていく
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('乱数で並べかえ', function () {
//            /*
//             * 166ms
//             * 全件検索になって遅い
//             */
//            User::orderBy('rand')
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('乱数で並べかえ（インデックスあり）', function () {
//            /*
//             * 4ms
//             * インデックスがあるので早い
//             */
//            User::orderBy('rand_index')
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('type_kind_10_indexで絞り込んで、乱数で並べかえ（インデックスあり）', function () {
//            /*
//             * 5ms
//             * orderby狙いのindexが発動して高速
//             */
//            User::where('type_kind_10_index', 8)
//                ->orderBy('rand_index')
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('type_kind_10_indexで絞り込んで、乱数で並べかえ（インデックスあり）', function () {
//            /*
//             * 49ms
//             * orderby狙いのindexが発動しているがoffsetが大きくなると全件検索に近づく
//             */
//            User::where('type_kind_10_index', 8)
//                ->orderBy('rand_index')
//                ->offset(10000)
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('nullを含む乱数で並べかえ（インデックスなし）', function () {
//            /*
//             * 226ms
//             * nullが先に来る。遅い。
//             */
//            User::orderBy('rand_nullable')
//                ->take(10)
//                ->get();
//        });
//        $benchmark->add('where（インデックスなし）', function () {
//            /*
//             * 10765 ms
//             * 全件検索になり遅い
//             */
//            User::where('type_kind_2', 1)
//                ->limit(500)
//                ->get();
//        });
//        $benchmark->add('where（インデックスあり）', function () {
//            /*
//             * 97 ms
//             * 全件検索にはならない
//             */
//            User::where('type_kind_2_index', 1)
//                ->limit(500)
//                ->get();
//        });
//        $benchmark->add('複数where（一部インデックスあり）', function () {
//            /*
//             * 1390ms
//             * kind_3のindexが使われているが、その中で全件検索が行われて遅い
//             */
//            UserDetail::where('type_kind_3_index', 1)
//                ->where('type_kind_4', 1)
//                ->get();
//        });
//        $benchmark->add('複数where（両方にインデックスあり）', function () {
//            /*
//             * 1403ms
//             * 選択率の高い、kind_4のindexが使われている。
//             * 1テーブルにつき1つのindexしか使われないので、結局、kind_3の全件検索が行われて遅い
//             */
//            UserDetail::where('type_kind_3_index', 1)
//                ->where('type_kind_4_index', 1)
//                ->get();
//        });
        $benchmark->add('複数where（複合インデックスあり）', function () {
            /*
             * 1403ms
             * 選択率の高い、kind_4のindexが使われている。
             * 1テーブルにつき1つのindexしか使われないので、結局、kind_3の全件検索が行われて遅い
             */
            UserDetail::where('type_kind_3_index', 1)
                ->where('type_kind_4_index', 1)
                ->get();
        });
        // whereにindex
        // レコード無しとleft outer join
        // TODO: 状態を別テーブルに切り出す

        $benchmark->run();
    }

    private static function output($text)
    {
        fwrite(STDERR, $text);
    }
}
