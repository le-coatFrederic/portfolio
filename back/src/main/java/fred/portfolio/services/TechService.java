package fred.portfolio.services;

import fred.portfolio.data.dtos.TechShowDTO;
import fred.portfolio.data.entities.Tech;
import fred.portfolio.data.mappers.TechMapper;
import fred.portfolio.data.repositories.TechRepository;
import org.springframework.stereotype.Service;

import java.util.ArrayList;
import java.util.List;

@Service
public class TechService {
    private final TechRepository techRepository;
    private final TechMapper techMapper;

    public TechService(TechRepository techRepository, TechMapper techMapper) {
        this.techRepository = techRepository;
        this.techMapper = techMapper;
    }

    public List<TechShowDTO> getAll() {
        List<TechShowDTO> techs = new ArrayList<>();
        Iterable<Tech> techIterable = techRepository.findAllByOrderByIdAsc();
        techIterable.forEach(tech -> techs.add(this.techMapper.techToTechDto(tech)));
        return techs;
    }
}
