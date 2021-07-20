package main

type Employee interface { // Interface for all Employee having common method salary
	salary() int
}

type Worker struct{ // Struct for Fulltime and Contractor
	basic int
	duration string
}

type Freelencer struct{ // Struct for Freelencer
	basic int
	duration string
}

func (w Worker) salary() int { // Salary for Worker
	return 28 * w.basic
}

func (f Freelencer) salary() int { // Salary for Freelencer
	return 10 * 28 * f.basic
}

func main () {
	fulltime := Worker{500, "daily"}
	contractor := Worker{100, "daily"}
	freelancer := Freelencer{10, "hourly"}

	var employees = []Employee{fulltime, contractor, freelancer}
	for _, employee := range employees {
		println(employee.salary())
	}
}