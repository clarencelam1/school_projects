module test_pc_register();

   reg  [31:0]pc_address;
   wire  [31:0]pc_out;
	reg clk;
	reg reset;

   // The design under test is our adder
   pc_register dut (   
	.clock(clk),
	.reset(reset),
	.enable(1),
	
	.pc_address(pc_address),
	.pc_out(pc_out)
    );
	
	initial
     begin
        clk = 0;
        forever #10 clk = !clk;
     end

   // Test with a variety of inputs.
   // Introduce new stimulus on the falling clock edge so that values
   // will be on the input wires in plenty of time to be read by
   // registers on the subsequent rising clock edge.
   initial
     begin
	  reset = 0;
	  pc_address = 32'h12121212;
	  @(negedge clk);
	  reset = 1;
     end // initial begin

endmodule // test_adder