module pc_register (
	
input									 clock,
input								  reset,
input								 enable,
input [31:0]				pc_address,
	
output reg [31:0]				 pc_out
	
);


always@(posedge clock)

	begin
		if(enable)
			begin
				if(reset)
				begin
					pc_out <= 32'h003FFFFC;
				end else begin
					pc_out <= pc_address;
					end
			end
	end
	
endmodule


