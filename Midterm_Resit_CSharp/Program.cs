
// MIDTERM RESIT - SHOTA IVANIDZE C22-1 
// 12 JUNE 2020
// TIME STARTED: 15:01:05 
// TIME ENDED: 18:25:37
// ELAPSED TIME: 03:24:32


using System;
using System.Collections.Generic;


namespace Midterm
{
    public class Program
    {
        // #1
        abstract class Gamocema
        {
            public string dasaxeleba;
            public string avtori;
            public int gamocemisWeli = 2020;
            public static int gamocemebisRaodenoba;

            // #4

            public void PrintBase(int _gamocemisWeli = 0, string _gamomcemloba = null, int _gverdebisRaodenoba = 0)
            {
                int gamocemisWeli = _gamocemisWeli;
                string gamomcemloba = _gamomcemloba;
                int gverdebisRaodenoba = _gverdebisRaodenoba;

                Console.WriteLine("-------------------------------------------------");
                Console.WriteLine("Dasaxeleba: " + dasaxeleba);
                Console.WriteLine("Avtori: " + avtori);
                Console.WriteLine("Gamocemis Weli: " + gamocemisWeli);
                Console.WriteLine("Gamomcembloba: " + gamomcemloba);
                Console.WriteLine("Gverdebis Raodenoba: " + gverdebisRaodenoba);
                
            }

            public void PrintBase(string _jurnalisDasaxeleba = null, int _nomeri = 0, int _gamocemisWeli = 0, int _gverdebisRaodenoba = 0)
            {
                string jurnalisDasaxeleba = _jurnalisDasaxeleba;
                int nomeri = _nomeri;
                int gamocemisWeli = _gamocemisWeli;
                int gverdebisRaodenoba = _gverdebisRaodenoba;

                Console.WriteLine("-------------------------------------------------");
                Console.WriteLine("Dasaxeleba: " + dasaxeleba);
                Console.WriteLine("Avtori: " + avtori);
                Console.WriteLine("Jurnalis Dasaxeleba: " + jurnalisDasaxeleba);
                Console.WriteLine("Nomeri: " + nomeri);
                Console.WriteLine("Gamocemis Weli: " + gamocemisWeli);
                Console.WriteLine("Gverdebis Raodenoba: " + gverdebisRaodenoba);

            }

            public void PrintBase(string _bmuli = null, string _anotacia = null)
            {
                string bmuli = _bmuli;
                string anotacia = _anotacia;


                Console.WriteLine("-------------------------------------------------");
                Console.WriteLine("Dasaxeleba: " + dasaxeleba);
                Console.WriteLine("Avtori: " + avtori);
                Console.WriteLine("Bmuli: " + bmuli);
                Console.WriteLine("Anotacia: " + anotacia);

            }

            // #5
            public static void Search(List<Gamocema> gamocemebisMasivi, int start, int end)
            {
                List<Gamocema> array = gamocemebisMasivi;
                Console.WriteLine();
                Console.WriteLine();
                Console.WriteLine();
                Console.WriteLine();
                Console.WriteLine();
                Console.WriteLine();
                Console.WriteLine("Gamoqveynebuli " + start + "-dan " + end + "-mde");
                Console.WriteLine();

                foreach (Gamocema gamocema in array)
                {
                    if (gamocema.gamocemisWeli >= start && gamocema.gamocemisWeli <= end)
                    {
                        Console.WriteLine("-------------------------------------------------");
                        Console.WriteLine("Dasaxeleba: " + gamocema.dasaxeleba);
                        Console.WriteLine("Avtori: " + gamocema.avtori);
                        Console.WriteLine("Avtori: " + gamocema.gamocemisWeli);
                    }
                }
            }

        }

        // #2 Wigni
        class Wigni : Gamocema
        {
            public string gamomcemloba;
            public int gverdebisRaodenoba;

            // Constructors
            public Wigni(string _dasaxeleba, string _avtori, int _gamocemisWeli, string _gamomcemloba, int _gverdebisRaodenoba)
            {
                dasaxeleba = _dasaxeleba;
                avtori = _avtori;
                gamocemisWeli = _gamocemisWeli;
                gamomcemloba = _gamomcemloba;
                gverdebisRaodenoba = _gverdebisRaodenoba;

                gamocemebisRaodenoba++;
                PrintBase(gamocemisWeli, gamomcemloba, gverdebisRaodenoba);

            }
        }

        // #2 Statia
        class Statia : Gamocema
        {
            public string jurnalisDasaxeleba;
            public int nomeri;
            public int gverdebisRaodenoba;

            // Constructors
            public Statia(string _dasaxeleba, string _avtori, string _jurnalisDasaxeleba, int _nomeri, int _gamocemisWeli, int _gverdebisRaodenoba)
            {
                dasaxeleba = _dasaxeleba;
                avtori = _avtori;
                jurnalisDasaxeleba = _jurnalisDasaxeleba;
                nomeri = _nomeri;
                gamocemisWeli = _gamocemisWeli;
                gverdebisRaodenoba = _gverdebisRaodenoba;

                gamocemebisRaodenoba++;
                PrintBase(jurnalisDasaxeleba, nomeri, gamocemisWeli, gverdebisRaodenoba);
            }
        }

        // #2 Eleqtronuli Resursi
        class Resursi : Gamocema
        {
            public string bmuli;
            public string anotacia;

            // Constructors
            public Resursi(string _dasaxeleba, string _avtori, string _bmuli, string _anotacia)
            {
                dasaxeleba = _dasaxeleba;
                avtori = _avtori;
                bmuli = _bmuli;
                anotacia = _anotacia;

                gamocemebisRaodenoba++;
                PrintBase(bmuli, anotacia);
            }
        }
        static void Main(string[] args)
        {
            // #3
            var gamocemisMasivi = new List<Gamocema>
            {
                new Wigni("The Great Getsby", "Francis Scott Fitzgerald", 1925, "Charles Scribner's Sons", 218),
                new Wigni("Arch of Triumph", "Erich Maria Remarque", 1945, "	Appleton-Century", 455),
                new Statia("Test", "Shota Ivanidze", "NewsJournal", 1, 2000, 20),
                new Statia("Civil War", "Shota Ivanidze", "USA Today", 31, 2020, 30),
                new Resursi("Resource", "Vinme Avtori", "www.google.com/", "p27")
            };


            // #5 Gamocema.Search(List, StartYear, EndYear);
            Gamocema.Search(gamocemisMasivi, 2000, 2020);
        }
    }
}
