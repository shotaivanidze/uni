using System;

namespace Homework_1
{
    class Homework1
    {   
        public class Pirveli
        {
            public static double First(double _a, double _b, double _c, double _d)
            {
                double a = _a;
                double b = _b;
                double c = _c;
                double d = _d;

                double mult = a * b * c * d;
                double geometricmean = Math.Pow(mult, 1.0 / 4);

                return geometricmean;
            }

            public static bool Second()
            {
                bool x1 = true;
                bool x2 = false;
                bool x3 = true;
                bool x4 = false;

                bool y = x1 && x2 || x3 && !x4;

                return y;
            }

            public static string Third(int _a)
            {
                int number = _a;

                if (number <= 23)
                {
                    return "Ricxvi naklebi an tolia 23-ze";
                }
                else
                {
                    return "Ricxvi meti an tolia 23-ze";
                }
            }

            public static int Fourth(int _a, int _n)
            {
                int a = _a;
                int n = _n;

                int i;
                int y = 1;

                for (i = 1; i <= n; i++)
                {
                    int sum = a + i;
                    y *= sum;
                }

                y *= (a + n - 1);
                y *= a;

                return y;
            }

            public static int Fifth(params int[] values)
            {
                int sum = 0;

                foreach (int value in values)
                {
                    if (value > 0)
                    {
                        sum += value;
                    }
                }

                return sum;
            }

            public static int Sixth(params int[] values)
            {
                int count = 0;

                foreach (int value in values)
                {
                    if (value % 2 == 0)
                    {
                        count += 1;
                    }
                }

                return count;
            }
        }

        static void Main(string[] args)
        {
            Console.WriteLine("Savarjisho 2.1.8, sashualo geometriuli: " + Pirveli.First(10, 10, 10, 10));
            Console.WriteLine("Savarjisho 2.2.1, y = x1 && x2 || x3 && !x4: " + Pirveli.Second());
            Console.WriteLine("Savarjisho 3.1.8, daadgine aris tu ara ricxvi naklebi an toli 23-ze: " + Pirveli.Third(12));
            Console.WriteLine("Savarjisho 3.4.8, y = a(a + 1)(a + 2) ... (a + n - 1): " + Pirveli.Fourth(1, 2));
            Console.WriteLine("Savarjisho 4.1.8, ipovis masivis dadebiti elementebis jams: " + Pirveli.Fifth(1, -2, 3, -4, 5, -6, 7));
            Console.WriteLine("Savarjisho 4.2.8, ipovis masivis luwi elementebis raodenobas: " + Pirveli.Sixth(1, 10, -12, 3, -5, 2, -30));
            Console.ReadKey();

        }
    }
}
