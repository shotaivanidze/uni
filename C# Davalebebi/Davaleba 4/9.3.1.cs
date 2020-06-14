using System;
using System.Reflection.Metadata.Ecma335;

namespace Davaleba
{
    class Program
    {
        public interface ICalc
        {
            int Square(int par);
            int Cube(int par);
        }

        class Calculator : ICalc
        {
            public int Square(int par)
            {
                return par * par;
            }

            public int Cube(int par)
            {
                return par * par * par;
            }
        }

        static void Main()
        {
            Calculator calc = new Calculator();
            Console.WriteLine(calc.Square(2));
            Console.WriteLine(calc.Cube(2));
        }
    }

    
}
