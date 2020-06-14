using System;
using System.Reflection.Metadata.Ecma335;

namespace Davaleba
{
    class Program
    {
        public interface IEven
        {
            int Even();
        }

        class Private : IEven
        {
            private int evenNumber;

            public int Even()
            {
                Random random = new Random();
                
                int randomNumber = random.Next();

                if (randomNumber % 2 != 0)
                {
                    evenNumber = randomNumber + 1;
                    return evenNumber;
                }

                evenNumber = randomNumber;
                return evenNumber;

            }
        }

        static void Main()
        {
            Private priv = new Private();
            Console.WriteLine(priv.Even());

        }
    }

    
}
